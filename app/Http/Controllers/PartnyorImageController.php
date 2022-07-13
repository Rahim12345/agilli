<?php

namespace App\Http\Controllers;

use App\Models\PartnyorImage;
use App\Http\Requests\StorePartnyorImageRequest;
use App\Http\Requests\UpdatePartnyorImageRequest;
use App\Traits\FileUploader;

class PartnyorImageController extends Controller
{
    use FileUploader;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StorePartnyorImageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePartnyorImageRequest $request)
    {
        $src = $this->fileSave('files/partnyors/',$request->src);

        PartnyorImage::create([
           'src'=>$src,
           'type'=>$request->type == 'partnyor' ? 1 : 2,
        ]);

        toastr()->success('Data uğurla əlavə edildi');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PartnyorImage  $partnyorImage
     * @return \Illuminate\Http\Response
     */
    public function show(PartnyorImage $partnyorImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PartnyorImage  $partnyorImage
     * @return \Illuminate\Http\Response
     */
    public function edit(PartnyorImage $partnyorImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePartnyorImageRequest  $request
     * @param  \App\Models\PartnyorImage  $partnyorImage
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePartnyorImageRequest $request, PartnyorImage $partnyorImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PartnyorImage  $partnyorImage
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partnyorImage = PartnyorImage::findOrFail($id);
        $this->fileDelete('files/partnyors/'.$partnyorImage->src);
        $partnyorImage->delete();
        toastr()->success('Data uğurla silindi');

        return redirect()->back();
    }
}
