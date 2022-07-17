<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('front.pages.home');
    }

    public function about()
    {
        return view('front.pages.about');
    }

    public function works()
    {
        return view('front.pages.works',[
            'categories'=>Category::latest()->get()
        ]);
    }
}
