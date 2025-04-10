<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class AdminController extends Controller
{
    






public function create(){
    return view('dashboard.User.store');
}


public function dashboard()
{ return view('dashboard');
}



public function store(Request $request)
{
    $user = new User();
    $request->validate([
        'name' => 'required|max:28',
        'email' => 'required|email|unique:users,email',
        'password' => 'nullable|max:38',
        'ConfirmPassword' => 'nullable|same:password',
       
     ]);

   
    $user->name = $request->name;
   
    $user->email = $request->email;
  
    $user->password =bcrypt($request->password); 
      
        $user->save();

    return redirect()->back()->with('success', 'Admin inserted successfully');
   
}

public function view()
{
    $users = User::latest()->get();
    return view('dashboard.User.view', compact('users'));
}



public function delete($id)
{
    $user = User::find($id);
    $user->delete();
    return redirect()->back()->with('success', 'Admin deleted successfully');
 }


 
 public function edit($id){
    $user = User::find($id);
   
    return view('dashboard.User.edit',compact('user'));
}




public function update(Request $request ){

     $user = User::find($request->id);
    $request->validate([
        'name' => 'required|max:28',
        'email' => 'required|email',
        'password' => 'nullable|max:38',
        'ConfirmPassword' => 'nullable|same:password',
       
       
    ]);

  
    if ($request->password === null){
$request['password'] = $user->password;
}else{ 
    $request['password'] = Hash::make($request->password);
}
unset($request['confirePassword ']);
$user->name = $request->name;

$user->email = $request->email;

$user->password =$request->password; 
  
    $user->save();
    return redirect('/admin/viewusers')->with('success', 'Admin updated successfully');
}
}

