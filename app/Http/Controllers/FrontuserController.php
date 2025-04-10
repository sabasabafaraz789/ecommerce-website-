<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Course;
use App\Models\Hireus;

use Illuminate\Http\Request;

class FrontuserController extends Controller
{
    public function home(){
        return view('front.Sections.home');
    }

    public function about(){
        return view('front.Sections.about');
    }
    public function contect(){
        return view('front.Sections.contect');
    }

    public function team(){
        return view('front.Sections.team');
    }
    public function whyus(){
        return view('front.Sections.whyus');
    }

    public function products(){
        $products = Product::all();
        $courses = Course::all();
        $hireus = Hireus::all();
        return view('front.Sections.products' ,  compact ('products','courses','hireus'));
    }




}
