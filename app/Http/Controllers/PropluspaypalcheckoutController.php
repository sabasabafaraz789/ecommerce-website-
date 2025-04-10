<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Omnipay\Omnipay;

class PropluspaypalcheckoutController extends Controller
{
    



    // public function productcart(){

    //     $products = Product::all();
    //     return view('Productadirectory.add',compact('products'));
    // }


    public function addToCart(Request $request,$id){
        $product = Product::find($id);
        $oldCart = Session::has('Cart') ? Session::get('Cart') : null;
        $cart = new Cart($oldCart);

        $cart->add($product,$product->id);
        $request->session()->put('Cart',$cart);
//        dd($cart);
        return redirect()->back();
    }





     public function increaseByone($id){
        $oldCart = Session::has('Cart') ? Session::get('Cart') : null ;
        $cart = new Cart($oldCart);
        $cart->increase($id);

        if (count($cart->items) > 0){
            Session::put('Cart', $cart);
        }else{
            Session::forget('Cart');
        }
        return redirect()->back();
    }



  public function decreaseByOne($id){
        $oldCart = Session::has('Cart') ? Session::get('Cart') : null ;
        $cart = new Cart($oldCart);
        $cart->decrease($id);

        if (count($cart->items) > 0){
            Session::put('Cart', $cart);
        }else{
            Session::forget('Cart');
        }
        return redirect()->back();
    }







  
    






    public function view(Request $data)
    {
        if (!Session::has('Cart')) {
            return view('paypal.cart', ['product' => [], 'totalPrice' => 0]);
        }
    
        $oldCart = Session::get('Cart');
        $cart = new Cart($oldCart);
        // dd($cart);


        return view('paypal.cart', ['product' => $cart->items, 'totalPrice' => $cart->totalprice]);
    }





    public function checkOut() {
       
        if (!Session::has('Cart')) {
            return view('paypal.cart' , compact('product'));
        }
        
        $oldCart = Session::get('Cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalprice;
    
        // Pass multiple variables to the view using compact
        return view('order', compact('total'));
    }
    


///Paypal

    private $gateway;

    public function __construct() {

        $this->gateway =Omnipay::create('PayPal_Rest'); 
        $this->gateway->setClientId(env('PAYPAL_CLIENT_ID'));
         $this->gateway->setSecret(env('PAYPAL_CLIENT_SECRET')); 
         $this->gateway->setTestMode(true);
    } 
        public function pay(Request $request)
        {

            if (!Session::has('Cart')) {
                return redirect('/viewCart'); // Redirect to the cart page or another appropriate route
            }
        
            // Retrieve the user ID if the user is authenticated
            if (Auth::guard('front')->check()) {
                $userId = Auth::guard('front')->user()->id;
                $name=Auth::guard('front')->user()->name;
            } else {
                // Handle the case where the user is not authenticated
                // You might want to redirect to a login page or show an error message
                return redirect()->route('login'); // Redirect to the login page route
            }

            $oldCart = Session::get('Cart');
            $cart = new Cart($oldCart);
        try {
        
        $response= $this->gateway->purchase(array(
        'amount' => $cart->totalprice,
       'currency'=> env('PAYPAL_CURRENCY'), 
       'returnUrl' => url('success'),
       'cancelUrl' => url('error'),
       
        ))->send();

        if ($response->isRedirect()) {

            $response->redirect();
        } else{  
            return $response->getMessage();
        } 
            } catch (\Throwable $th){
            
            return $th->getMessage();


        } 
    }


       public function success(Request $request)
       {





         if ($request->input('paymentId') && $request->input('PayerID')) 

{
     $transaction = $this->gateway->completePurchase(array(
    
    'payer_id' => $request->input('PayerID'),
     'transactionReference' => $request->input('paymentId')
     ));

$response =$transaction->send();

if ($response->isSuccessful()){

$arr= $response->getData();

  if (!Session::has('Cart')) {
            return redirect('/viewCart'); // Redirect to the cart page or another appropriate route
        }
    
        // Retrieve the user ID if the user is authenticated
        if (Auth::guard('front')->check()) {
            $userId = Auth::guard('front')->user()->id;
            $name=Auth::guard('front')->user()->name;
        } else {
            // Handle the case where the user is not authenticated
            // You might want to redirect to a login page or show an error message
            return redirect()->route('login'); // Redirect to the login page route
        }
    
        $oldCart = Session::get('Cart');
        $cart = new Cart($oldCart);


$order = new Order();
$order->frontuser_id = $userId;
$order->payment_id= $arr['id'];
$order->name =  $request->input('name');
// $order->payer_id= $arr['payer']['payer_info']['payer_id'];
$order->cart = serialize($cart);
// $order->payer_email =$arr['payer']['payer_info']['email']; 
$order->amount= $cart->totalprice;

$order->currency= env('PAYPAL_CURRENCY');

$order->payment_status= $arr['state'];

Auth::guard('front')->user()->orders()->save($order);
       
Session::forget('Cart');

return "Payment is Successfull. Your Transaction Id is". $arr['id'];
}
else {
    return $response->getMessage();
}
} else {
return 'Payment declined!!';
}
}
       
public function error()
{
    return 'User Payment declined!!';

}

//endpaypal//










}
