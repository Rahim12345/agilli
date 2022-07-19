<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\News;
use App\Models\PartnyorImage;
use App\Models\Project;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('front.pages.home', [
            'partners' => PartnyorImage::where('type', 1)->latest()->get(),
            'teams' => PartnyorImage::where('type', 2)->latest()->get(),
            'last_projects'=>Project::orderBy('id','desc')->take(2)->get(),
            'last_news'=>News::orderBy('id','desc')->take(2)->get(),
            'next_news'=>News::orderBy('id','desc')->skip(2)->first()
        ]);
    }

    public function about()
    {
        return view('front.pages.about',[
            'partners' => PartnyorImage::where('type', 1)->latest()->get(),
            'teams' => PartnyorImage::where('type', 2)->latest()->get(),
            'last_news'=>News::orderBy('id','desc')->take(2)->get(),
            'next_news'=>News::orderBy('id','desc')->skip(2)->first()
        ]);
    }

    public function works()
    {
        return view('front.pages.works', [
            'categories' => Category::latest()->get()
        ]);
    }

    public function worksPost(Request $request)
    {
        if ($request->category_id == 0)
        {
            $projects = Project::with('category')->offset($request->start)->limit($request->limit)->get();
        }
        else
        {
            $projects = Project::with('category')->where('category_id',$request->category_id)->offset($request->start)->limit($request->limit)->get();
        }

        $output = '';
        foreach ($projects as $project)
        {
            $output .= '
                <div class="box col-xl-6 col-lg-6 col-md-6 col-sm-6 __js_masonry-item __js_'.str_slug($project->category->{'name_'.app()->getLocale()}).'" onclick="openpage(\''.route('front.works.single',['id'=>$project->id]).'\')" >
                    <div class="image">
                        <img src="'.asset('files/project-banner/'.$project->cover).'">
                    </div>
                </div>
            ';
        }

        return $output;
    }

    public function worksSingle($id)
    {
        $project    = Project::with('images')->findOrFail($id);

        $previous   = Project::where('id', '<', $id)->orderBy('id','desc')->first();
        $next       = Project::where('id', '>', $id)->orderBy('id','asc')->first();
        return view('front.pages.project-single', compact('project', 'next','previous'));
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

    public function contact()
    {
        return view('front.pages.contact');
    }

    public function contactPost(Request $request)
    {
        $this->validate($request,[
           'email'=>'required|email|unique:contacts,email'
        ],[],[
            'email'=>__('menu.email_adresiniz')
        ]);

        Contact::create([
           'email'=>$request->email
        ]);

        return response(__('menu.subscribe_message'),'200');
    }
}
