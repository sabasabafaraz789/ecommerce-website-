<?php

namespace App\Http\Controllers;
use App\Models\Hireus;
use Illuminate\Http\Request;

class HireusController extends Controller
{
    

    public function create(){
        return view('dashboard.Hireus.store');
    }
    
    

    
    
    public function store(Request $request)
    {
        $hireus = new Hireus();
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
             $hireus->image = 'images/'.$name_gen;
         }

       
       
        $hireus->name = $request->name;
        $hireus->price = $request->price;
        $hireus->old_price =$request->old_price;
        $hireus->off =$request->off;
          
     
          
    
        $hireus->discription =$request->discription;
          
            $hireus->save();
    
        return redirect()->back()->with('success', 'hireus inserted successfully');
       
    }
    
    public function view()
    {
        $hireus = Hireus::latest()->get();
        return view('dashboard.Hireus.view', compact('hireus'));
    }
    
    
    
    public function delete($id)
    {
        $hireus = Hireus::find($id);
        $hireus->delete();
        return redirect()->back()->with('success', 'hireus deleted successfully');
     }
    
    
     
     public function edit($id){
        $hireus = Hireus::find($id);
       
        return view('dashboard.Hireus.edit',compact('hireus'));
    }
    
    
    
    
    public function update(Request $request ){
    
         $hireus = Hireus::find($request->id);
        $request->validate([
            // 'name' => 'required|max:28',
            // 'email' => 'required|email',
            // 'password' => 'nullable|max:38',
            // 'ConfirmPassword' => 'nullable|same:password',
            // 'role_id' => 'required',
           
        ]);
    
        $img = $request->file('image');
         if ($img) {
             $name_gen = uniqid().'.'.$img->getClientOriginalExtension();
             \Image::make($img)->resize(1920, 1000)->save(public_path('images/'.$name_gen));
             $hireus->image = 'images/'.$name_gen;
         }

         $hireus->name = $request->name;
         $hireus->price = $request->price;
         $hireus->old_price =$request->old_price;
         $hireus->off =$request->off;
           
      
           
     
         $hireus->discription =$request->discription;
           
             $hireus->save();
        return redirect('/admin/viewhireus')->with('success', 'Hireus updated successfully');
    }





}
