<?php

namespace App\Http\Controllers;

use App\Helpers\Options;
use App\Models\Option;
use App\Http\Requests\StoreOptionRequest;
use App\Http\Requests\UpdateOptionRequest;
use App\Models\PartnyorImage;
use App\Traits\FileUploader;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class OptionController extends Controller
{
    use FileUploader;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('back.pages.options',[
            'unvan_az'=>Options::getOption('unvan_az'),
            'unvan_en'=>Options::getOption('unvan_en'),
            'email'=>Options::getOption('email'),
            'tel'=>Options::getOption('tel'),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOptionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOptionRequest $request)
    {
        $check_add = Options::getOption('unvan_az') == '' ? true : false;
        foreach ($request->keys() as $key)
        {
            if ($key != '_token')
            {
                Option::updateOrCreate(
                    ['key'   => $key],
                    [
                        'value' => $request->post($key)
                    ]
                );
            }
        }

        if ($check_add)
        {
            toastr()->success('Data uğurla əlavə edildi');
        }
        else
        {
            toastr()->success('Data uğurla yeniləndi');
        }

        return redirect()->route('option.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Option  $option
     * @return \Illuminate\Http\Response
     */
    public function show(Option $option)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Option  $option
     * @return \Illuminate\Http\Response
     */
    public function edit(Option $option)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOptionRequest  $request
     * @param  \App\Models\Option  $option
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOptionRequest $request, Option $option)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Option  $option
     * @return \Illuminate\Http\Response
     */
    public function destroy(Option $option)
    {
        //
    }

    public function homeBanner()
    {
        return view('back.pages.home.home-banner',[
            'home_banner_src'=>Options::getOption('home_banner_src'),
            'home_banner_text_az'=>Options::getOption('home_banner_text_az'),
            'home_banner_text_en'=>Options::getOption('home_banner_text_en'),
            'home_banner_button_text_az'=>Options::getOption('home_banner_button_text_az'),
            'home_banner_button_text_en'=>Options::getOption('home_banner_button_text_en'),
            'home_banner_link'=>Options::getOption('home_banner_link'),
        ]);
    }

    public function homeBannerPost(Request $request)
    {
        $this->validate($request,[
            'home_banner_src'=>'nullable|image',
            'home_banner_text_az'=>'nullable|max:1000',
            'home_banner_text_en'=>'nullable|max:1000',
            'home_banner_button_text_az'=>'nullable|max:1000',
            'home_banner_button_text_en'=>'nullable|max:1000',
            'home_banner_link'=>'nullable|max:1000',
        ],[],[
            'home_banner_src'=>'Banner',
            'home_banner_text_az'=>'Text(AZ)',
            'home_banner_text_en'=>'Text(EN)',
            'home_banner_button_text_az'=>'Button(AZ)',
            'home_banner_button_text_en'=>'Button(EN)',
            'home_banner_link'=>'Link',
        ]);



        foreach ($request->keys() as $key)
        {
            if ($key != '_token')
            {
                if ($key == 'home_banner_src')
                {
                    $src   = $this->fileUpdate(Options::getOption('home_banner_src'), $request->hasFile('home_banner_src'), $request->home_banner_src, 'files/home-banner/');
                    Option::updateOrCreate(
                        ['key'   => $key],
                        [
                            'value' => $src
                        ]
                    );
                }
                else
                {
                    Option::updateOrCreate(
                        ['key'   => $key],
                        [
                            'value' => $request->post($key)
                        ]
                    );
                }
            }
        }
        toastr()->success('Data uğurla əlavə edildi');
        return redirect()->back();
    }

    public function strateji()
    {
        return view('back.pages.home.strateji',[
            'home_title_1_az'=>Options::getOption('home_title_1_az'),
            'home_title_1_en'=>Options::getOption('home_title_1_en'),

            'home_title_2_az'=>Options::getOption('home_title_2_az'),
            'home_title_2_en'=>Options::getOption('home_title_2_en'),

            'home_title_3_az'=>Options::getOption('home_title_3_az'),
            'home_title_3_en'=>Options::getOption('home_title_3_en'),

            'home_text_1_az'=>Options::getOption('home_text_1_az'),
            'home_text_1_en'=>Options::getOption('home_text_1_en'),

            'home_text_2_az'=>Options::getOption('home_text_2_az'),
            'home_text_2_en'=>Options::getOption('home_text_2_en'),

            'home_text_3_az'=>Options::getOption('home_text_3_az'),
            'home_text_3_en'=>Options::getOption('home_text_3_en'),
        ]);
    }

    public function stratejiPost(Request $request)
    {
        $this->validate($request,[
            'home_title_1_az'=>'nullable|max:10000',
            'home_title_1_en'=>'nullable|max:10000',
            'home_title_2_az'=>'nullable|max:10000',
            'home_title_2_en'=>'nullable|max:10000',
            'home_title_3_az'=>'nullable|max:10000',
            'home_title_3_en'=>'nullable|max:10000',
            'home_text_1_az'=>'nullable|max:10000',
            'home_text_1_en'=>'nullable|max:10000',
            'home_text_2_az'=>'nullable|max:10000',
            'home_text_2_en'=>'nullable|max:10000',
            'home_text_3_az'=>'nullable|max:10000',
            'home_text_3_en'=>'nullable|max:10000',
        ],[],[
            'home_title_1_az'=>'Title 1 (AZ)',
            'home_title_1_en'=>'Title 1 (EN)',
            'home_title_2_az'=>'Title 2 (AZ)',
            'home_title_2_en'=>'Title 2 (EN)',
            'home_title_3_az'=>'Title 3 (AZ)',
            'home_title_3_en'=>'Title 3 (EN)',
            'home_text_1_az'=>'Text 1 (AZ)',
            'home_text_1_en'=>'Text 1 (EN)',
            'home_text_2_az'=>'Text 2 (AZ)',
            'home_text_2_en'=>'Text 2 (EN)',
            'home_text_3_az'=>'Text 3 (AZ)',
            'home_text_3_en'=>'Text 3 (EN)',
        ]);

        foreach ($request->keys() as $key)
        {
            if ($key != '_token')
            {
                Option::updateOrCreate(
                    ['key'   => $key],
                    [
                        'value' => $request->post($key)
                    ]
                );
            }
        }

        toastr()->success('Data uğurla əlavə edildi');

        return redirect()->back();
    }

    public function partnyor($type)
    {
        if ($type == 'partnyor')
        {
            $t = 1;
        }
        else
        {
            $t = 2;
        }
        return view('back.pages.home.partnyor',[
            'home_partnyor_title_az'=>Options::getOption($type.'_home_partnyor_title_az'),
            'home_partnyor_title_en'=>Options::getOption($type.'_home_partnyor_title_en'),
            'home_partnyor_text_az'=>Options::getOption($type.'_home_partnyor_text_az'),
            'home_partnyor_text_en'=>Options::getOption($type.'_home_partnyor_text_en'),
            'images'=>PartnyorImage::where('type',$t)->latest()->get(),
            'type'=>$type,
        ]);
    }

    public function partnyorPost(Request $request)
    {
        $this->validate($request,[
            'home_partnyor_title_az'=>'nullable|max:10000',
            'home_partnyor_title_en'=>'nullable|max:10000',
            'home_partnyor_text_az'=>'nullable|max:10000',
            'home_partnyor_text_en'=>'nullable|max:10000',
            'type'=>['required',Rule::in(['partnyor','team'])],
        ],[],[
            'home_partnyor_title_az'=>'Title (AZ)',
            'home_partnyor_title_en'=>'Title (EN)',
            'home_partnyor_text_az'=>'Text (AZ)',
            'home_partnyor_text_en'=>'Text (EN)',
        ]);

        foreach ($request->keys() as $key)
        {
            if ($key == '_token' || $key == 'type')
            {

            }
            else
            {
                Option::updateOrCreate(
                    ['key'   => $request->type.'_'.$key],
                    [
                        'value' => $request->post($key)
                    ]
                );
            }
        }

        toastr()->success('Data uğurla əlavə edildi');

        return redirect()->back();
    }

    public function aboutBanner()
    {
        return view('back.pages.about.about-banner',[
            'about_banner_src'=>Options::getOption('about_banner_src'),
            'about_banner_button_text_az'=>Options::getOption('about_banner_button_text_az'),
            'about_banner_button_text_en'=>Options::getOption('about_banner_button_text_en'),
            'about_banner_link'=>Options::getOption('about_banner_link')
        ]);
    }

    public function aboutBannerPost(Request $request)
    {
        $this->validate($request,[
            'about_banner_src'=>'nullable|image',
            'about_banner_button_text_az'=>'nullable|max:1000',
            'about_banner_button_text_en'=>'nullable|max:1000',
            'about_banner_link'=>'nullable|max:1000'
        ],[],[
            'about_banner_src'=>'Banner',
            'about_banner_button_text_az'=>'Button(AZ)',
            'about_banner_button_text_en'=>'Button(EN)',
            'about_banner_link'=>'Link',
        ]);



        foreach ($request->keys() as $key)
        {
            if ($key != '_token')
            {
                if ($key == 'about_banner_src')
                {
                    $src   = $this->fileUpdate(Options::getOption('about_banner_src'), $request->hasFile('about_banner_src'), $request->about_banner_src, 'files/about-banner/');
                    Option::updateOrCreate(
                        ['key'   => $key],
                        [
                            'value' => $src
                        ]
                    );
                }
                else
                {
                    Option::updateOrCreate(
                        ['key'   => $key],
                        [
                            'value' => $request->post($key)
                        ]
                    );
                }
            }
        }
        toastr()->success('Data uğurla əlavə edildi');
        return redirect()->back();
    }

    public function projectBanner()
    {
        return view('back.pages.project.project-banner',[
            'project_banner_src'=>Options::getOption('project_banner_src'),
            'project_banner_button_text_az'=>Options::getOption('project_banner_button_text_az'),
            'project_banner_button_text_en'=>Options::getOption('project_banner_button_text_en'),
            'project_banner_link'=>Options::getOption('project_banner_link')
        ]);
    }

    public function projectBannerPost(Request $request)
    {
        $this->validate($request,[
            'project_banner_src'=>'nullable|image',
            'project_banner_button_text_az'=>'nullable|max:1000',
            'project_banner_button_text_en'=>'nullable|max:1000',
            'project_banner_link'=>'nullable|max:1000'
        ],[],[
            'project_banner_src'=>'Banner',
            'project_banner_button_text_az'=>'Button(AZ)',
            'project_banner_button_text_en'=>'Button(EN)',
            'project_banner_link'=>'Link',
        ]);



        foreach ($request->keys() as $key)
        {
            if ($key != '_token')
            {
                if ($key == 'project_banner_src')
                {
                    $src   = $this->fileUpdate(Options::getOption('project_banner_src'), $request->hasFile('project_banner_src'), $request->project_banner_src, 'files/project-banner/');
                    Option::updateOrCreate(
                        ['key'   => $key],
                        [
                            'value' => $src
                        ]
                    );
                }
                else
                {
                    Option::updateOrCreate(
                        ['key'   => $key],
                        [
                            'value' => $request->post($key)
                        ]
                    );
                }
            }
        }
        toastr()->success('Data uğurla əlavə edildi');
        return redirect()->back();
    }
}
