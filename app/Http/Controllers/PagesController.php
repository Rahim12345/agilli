<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use App\Models\PartnyorImage;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('front.pages.home', [
            'partners' => PartnyorImage::where('type', 1)->latest()->get(),
            'teams' => PartnyorImage::where('type', 2)->latest()->get(),
        ]);
    }

    public function about()
    {
        return view('front.pages.about');
    }

    public function works()
    {
        return view('front.pages.works', [
            'categories' => Category::latest()->get()
        ]);
    }

    public function news()
    {
        return view('front.pages.news');
    }

    public function newsPost(Request $request)
    {
        if (isset($_POST["limit"], $_POST["start"]))
        {
            $news = News::orderBy('id','desc')->offset($_POST["start"])->limit($_POST["limit"])->get();
            $output = '';

            foreach($news as $new)
            {
                $output .= '<div class="box col-xl-6 col-lg-6 col-md-6 col-sm-6" onclick="openpage(\''.route('front.news.single',['id'=>$new->id]).'\')">
                    <div class="image">
                        <img src="'.asset('files/news-banner/'.$new->cover).'">
                    </div>
                </div>';
            }
        }

        return $output;
    }

    public function newsSingle($id)
    {
        $news = News::findOrFail($id);

        $previous = News::where('id', '<', $id)->orderBy('id','desc')->first();
        return view('front.pages.news-single', compact('news', 'previous'));
    }
}
