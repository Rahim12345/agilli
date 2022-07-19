<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Category;
use App\Models\ProjectImage;
use App\Traits\FileUploader;

class ProjectController extends Controller
{
    use FileUploader;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('back.pages.project.index',[
            'projects'=>Project::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::latest()->get();
        return view('back.pages.project.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProjectRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectRequest $request)
    {
        $cover   = $this->fileUpdate($request->cover, $request->hasFile('cover'), $request->cover, 'files/project-banner/');

        $project = Project::create([
            'cover'=>$cover,
            'category_id'=>$request->category_id,
            'alt_az'=>$request->alt_az,
            'alt_en'=>$request->alt_en,
            'title_1_az'=>$request->title_1_az,
            'title_1_en'=>$request->title_1_en,
            'title_2_az'=>$request->title_2_az,
            'title_2_en'=>$request->title_2_en,
            'text_az'=>$request->text_az,
            'text_en'=>$request->text_en,
            'release_date_az'=>$request->release_date_az,
            'release_date_en'=>$request->release_date_en,
            'client_az'=>$request->client_az,
            'client_en'=>$request->client_en,
            'art_director_az'=>$request->art_director_az,
            'art_director_en'=>$request->art_director_en,
            'designer_az'=>$request->designer_az,
            'designer_en'=>$request->designer_en,
            'copyrighter_az'=>$request->copyrighter_az,
            'copyrighter_en'=>$request->copyrighter_en,
        ]);

        if($request->hasFile('images'))
        {
            foreach($request->file('images') as $image)
            {
                $src = $this->fileSave('files/project-images/',$image);

                ProjectImage::create([
                    'project_id'=>$project->id,
                    'src'=>$src
                ]);
            }
        }

        toastr()->success('Data uğurla əlavə edildi');
        return redirect()->route('project.edit',$project->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        $categories = Category::latest()->get();
        return view('back.pages.project.edit',compact('project','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProjectRequest  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        $cover   = $this->fileUpdate($project->cover, $request->hasFile('cover'), $request->cover, 'files/project-banner/');

        $project->update([
            'cover'=>$cover,
            'category_id'=>$request->category_id,
            'alt_az'=>$request->alt_az,
            'alt_en'=>$request->alt_en,
            'title_1_az'=>$request->title_1_az,
            'title_1_en'=>$request->title_1_en,
            'title_2_az'=>$request->title_2_az,
            'title_2_en'=>$request->title_2_en,
            'text_az'=>$request->text_az,
            'text_en'=>$request->text_en,
            'release_date_az'=>$request->release_date_az,
            'release_date_en'=>$request->release_date_en,
            'client_az'=>$request->client_az,
            'client_en'=>$request->client_en,
            'art_director_az'=>$request->art_director_az,
            'art_director_en'=>$request->art_director_en,
            'designer_az'=>$request->designer_az,
            'designer_en'=>$request->designer_en,
            'copyrighter_az'=>$request->copyrighter_az,
            'copyrighter_en'=>$request->copyrighter_en
        ]);

        if($request->hasFile('images'))
        {
            foreach($request->file('images') as $image)
            {
                $src = $this->fileSave('files/project-images/',$image);

                ProjectImage::create([
                    'project_id'=>$project->id,
                    'src'=>$src
                ]);
            }
        }

        toastr()->success('Data uğurla redaktə edildi');
        return redirect()->route('project.edit',$project->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $this->fileDelete('files/project-banner/'.$project->cover);
        foreach($project->images as $image)
        {
            $this->fileDelete('files/project-images/'.$image->src);
        }
        $project->delete();
        toastr()->success('Data uğurla silindi');

        return redirect()->back();
    }
}
