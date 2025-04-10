<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    






    public function create(){
        return view('dashboard.Product.store');
    }
    
    
    public function dashboard()
    { return view('dashboard');
    }
    
    
    
    public function store(Request $request)
    {
        $product = new Product();
        $request->validate([
            // 'name' => 'required|max:28',
            // 'email' => 'required|email|unique:users,email',
            // 'password' => 'nullable|max:38',
            // 'ConfirmPassword' => 'nullable|same:password',
            // 'role_id' => 'required',
         ]);
    
       


         $img = $request->file('image');
         if ($img) {
             $name_gen = uniqid().'.'.$img->getClientOriginalExtension();
             \Image::make($img)->resize(1920, 1000)->save(public_path('images/'.$name_gen));
             $product->image = 'images/'.$name_gen;
         }

        $product->name = $request->name;
       
        $product->name = $request->name;
        $product->price = $request->price;
        $product->old_price =$request->old_price;
        $product->off =$request->off;
          
       
        $product->discription =$request->discription;
          
            $product->save();
    
        return redirect()->back()->with('success', 'product inserted successfully');
       
    }
    
    public function view()
    {
        $products = Product::get();
        return view('dashboard.Product.view', compact('products'));
    }
    
    
    
    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->back()->with('success', 'product deleted successfully');
     }
    
    
     
     public function edit($id){
        $product = Product::find($id);
       
        return view('dashboard.Product.edit',compact('product'));
    }
    
    
    
    
    public function update(Request $request ){
    
         $product = Product::find($request->id);
       
    
        $img = $request->file('image');
         if ($img) {
             $name_gen = uniqid().'.'.$img->getClientOriginalExtension();
             \Image::make($img)->resize(1920, 1000)->save(public_path('images/'.$name_gen));
             $product->image = 'images/'.$name_gen;
         }

        $product->name = $request->name;
       
        $product->name = $request->name;
        $product->price = $request->price;
        $product->old_price =$request->old_price;
        $product->off =$request->off;
          
       
        $product->discription =$request->discription;
          
            $product->update();
        return redirect('/admin/viewproducts')->with('success', 'product updated successfully');
    }





}
