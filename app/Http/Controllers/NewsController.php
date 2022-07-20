<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use App\Traits\FileUploader;

class NewsController extends Controller
{
    use FileUploader;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('back.pages.news.index',[
            'news'=>News::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.pages.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreNewsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNewsRequest $request)
    {
        $cover      = $this->fileUpdate($request->cover, $request->hasFile('cover'), $request->cover, 'files/news-banner/');
        $image_1    = $this->fileUpdate($request->image_1, $request->hasFile('image_1'), $request->image_1, 'files/news-images/');
        $image_2    = $this->fileUpdate($request->image_2, $request->hasFile('image_2'), $request->image_2, 'files/news-images/');
        $news = News::create([
            'cover'=>$cover,
            'cover_alt_az'=>$request->cover_alt_az,
            'cover_alt_en'=>$request->cover_alt_en,
            'image_1_alt_az'=>$request->image_1_alt_az,
            'image_1_alt_en'=>$request->image_1_alt_en,
            'image_2_alt_az'=>$request->image_2_alt_az,
            'image_2_alt_en'=>$request->image_2_alt_en,
            'title_az'=>$request->title_az,
            'title_en'=>$request->title_en,
            'slug_az'=>$request->slug_az ? $request->slug_az : str_slug($request->title_az),
            'slug_en'=>$request->slug_en ? $request->slug_en : str_slug($request->title_en),
            'author_az'=>$request->author_az,
            'author_en'=>$request->author_en,
            'release_date_az'=>$request->release_date_az,
            'release_date_en'=>$request->release_date_en,
            'text_1_az'=>$request->text_1_az,
            'text_1_en'=>$request->text_1_en,
            'image_1'=>$image_1,
            'text_2_az'=>$request->text_2_az,
            'text_2_en'=>$request->text_2_en,
            'image_2'=>$image_2
        ]);

        toastr()->success('Data uğurla əlavə edildi');
        return redirect()->route('news.edit',$news->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        return view('back.pages.news.edit',compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNewsRequest  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNewsRequest $request, News $news)
    {
        $cover      = $this->fileUpdate($news->cover, $request->hasFile('cover'), $request->cover, 'files/news-banner/');
        $image_1    = $this->fileUpdate($news->image_1, $request->hasFile('image_1'), $request->image_1, 'files/news-images/');
        $image_2    = $this->fileUpdate($news->image_2, $request->hasFile('image_2'), $request->image_2, 'files/news-images/');

        $news->update([
            'cover'=>$cover,
            'cover_alt_az'=>$request->cover_alt_az,
            'cover_alt_en'=>$request->cover_alt_en,
            'image_1_alt_az'=>$request->image_1_alt_az,
            'image_1_alt_en'=>$request->image_1_alt_en,
            'image_2_alt_az'=>$request->image_2_alt_az,
            'image_2_alt_en'=>$request->image_2_alt_en,
            'title_az'=>$request->title_az,
            'title_en'=>$request->title_en,
            'slug_az'=>$request->slug_az ? $request->slug_az : str_slug($request->title_az),
            'slug_en'=>$request->slug_en ? $request->slug_en : str_slug($request->title_en),
            'author_az'=>$request->author_az,
            'author_en'=>$request->author_en,
            'release_date_az'=>$request->release_date_az,
            'release_date_en'=>$request->release_date_en,
            'text_1_az'=>$request->text_1_az,
            'text_1_en'=>$request->text_1_en,
            'image_1'=>$image_1,
            'text_2_az'=>$request->text_2_az,
            'text_2_en'=>$request->text_2_en,
            'image_2'=>$image_2
        ]);

        toastr()->success('Data uğurla redaktə edildi');
        return redirect()->route('news.edit',$news->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        $this->fileDelete('files/news-banner/'.$news->cover);
        $this->fileDelete('files/news-images/'.$news->image_1);
        $this->fileDelete('files/news-images/'.$news->image_2);
        $news->delete();

        toastr()->success('Data uğurla silindi');
        return redirect()->back();
    }
}
