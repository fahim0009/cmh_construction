<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Property;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function category()
    {
        return view('frontend.category');
    }

    public function categoryProperty($id)
    {
        $property = Property:: where('category_id','=',$id)->get();
        return view('frontend.catproperty', compact('property','id'));
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function privacy()
    {
        return view('frontend.privacy');
    }

    public function terms()
    {
        return view('frontend.terms');
    }

    

    public function getquote()
    {
        return view('frontend.getquote');
    }
}
