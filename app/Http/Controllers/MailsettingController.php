<?php

namespace App\Http\Controllers;
use Illuminate\Auth\Events\Registered;
use Exception;
 use Illuminate\Http\Request;
use App\Models\Frontuser;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MailsettingController extends Controller
{
    public function googlelogin(){
        return Socialite::driver('google')->redirect();

    }


    public function googlehandel(){

        try{

            $user=Socialite::driver('google')->user();
          
            // dd( $user);
    $finduser = Frontuser::updateOrCreate([
        'google_id' => $user->id,
    ], [
        'name' => $user->name,
        'email' => $user->email,
        'remember_token'=>$user->token,
         'google_id' => $user->id,
        'password' => Hash::make('asdf123'),
        
    ]);

   
         Auth::guard('front')->login($finduser);
    
   
    return redirect('/'); 
}
// session()->put('id',$finduser->id);

        
        catch(Exception $e){
          dd($e->getMessage());
        }
      

    }

}






