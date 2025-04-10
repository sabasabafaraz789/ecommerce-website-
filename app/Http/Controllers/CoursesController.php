<?php

namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    

    public function create(){
        return view('dashboard.Courses.store');
    }
    
    

    
    
    public function store(Request $request)
    {
        $course = new Course();
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
             $course->image = 'images/'.$name_gen;
         }

       
       
        $course->name = $request->name;
        $course->price = $request->price;
        $course->old_price =$request->old_price;
        $course->off =$request->off;
          
     
          
    
        $course->discription =$request->discription;
          
            $course->save();
    
        return redirect()->back()->with('success', 'course inserted successfully');
       
    }
    
    public function view()
    {
        $courses = Course::latest()->get();
        return view('dashboard.Courses.view', compact('courses'));
    }
    
    
    
    public function delete($id)
    {
        $course = Course::find($id);
        $course->delete();
        return redirect()->back()->with('success', 'course deleted successfully');
     }
    
    
     
     public function edit($id){
        $course = Course::find($id);
       
        return view('dashboard.Courses.edit',compact('course'));
    }
    
    
    
    
    public function update(Request $request ){
    
         $course = Course::find($request->id);
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
             $course->image = 'images/'.$name_gen;
         }

         $course->name = $request->name;
         $course->price = $request->price;
         $course->old_price =$request->old_price;
         $course->off =$request->off;
           
      
           
     
         $course->discription =$request->discription;
           
             $course->save();
        return redirect('/admin/viewcourses')->with('success', 'course updated successfully');
    }





}
