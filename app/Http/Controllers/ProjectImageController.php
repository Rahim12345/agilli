<?php

namespace App\Http\Controllers;

use App\Models\ProjectImage;
use App\Http\Requests\StoreProjectImageRequest;
use App\Http\Requests\UpdateProjectImageRequest;
use App\Traits\FileUploader;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProjectImageController extends Controller
{
    use FileUploader;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (isset($_GET["action"])) {
            if ($_GET["action"] == 'fetch_data') {
                $data = ProjectImage::where('project_id',$request->project_id)->orderBy('order_no','asc')->get();

                return json_encode($data);
            }

            if ($_GET['action'] == 'update') {
                for ($count = 0; $count < count($_GET["page_id_array"]); $count++) {
                    ProjectImage::whereId($_GET["page_id_array"][$count])->update([
                        'order_no'=>($count + 1)
                    ]);
                }
            }
        }
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
     * @param  \App\Http\Requests\StoreProjectImageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectImageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProjectImage  $projectImage
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectImage $projectImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProjectImage  $projectImage
     * @return \Illuminate\Http\Response
     */
    public function edit(ProjectImage $projectImage)
    {
        $projectImage->update([
            'col_12' => $projectImage->col_12 == 0 ? 1 : 0
        ]);

        toastr()->success('Status d??yi??dirildi');

        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProjectImageRequest  $request
     * @param  \App\Models\ProjectImage  $projectImage
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjectImageRequest $request, ProjectImage $projectImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProjectImage  $projectImage
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectImage $projectImage)
    {
        $this->fileDelete('files/project-images/' . $projectImage->src);
        $projectImage->delete();
        toastr()->success('Data u??urla silindi');

        return redirect()->back();
    }

    public function projectImageAlt(Request $request)
    {
        $this->validate($request,[
            'id'=>'required|exists:partnyor_images,id',
            'action'=>['required',Rule::in(['alt_az','alt_en'])]
        ]);

        $image = ProjectImage::findOrFail($request->id);
        $image->update([
            $request->action=>$request->text
        ]);
    }
}
