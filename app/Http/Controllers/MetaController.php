<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMetaRequest;
use App\Models\Meta;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class MetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax())
        {
            $data = Meta::latest()
                ->get();

            return DataTables::of($data)

                ->addColumn('action',function ($row){
                    return '
                <div class="btn-list flex-nowrap">
                    <a class="btn btn-primary"
                    href="'.route('meta.edit',[$row->id]).'"><i class="fa fa-edit"></i></a>
                </div>
                ';
                })

                ->rawColumns(['action'])

                ->make(true);
        }

        return view('back.pages.meta.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.pages.meta.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMetaRequest $request)
    {
        $menus = [
            'main_page' => 'Ana Səhifə',
            'about_page' => 'Haqqımızda',
            'works_page' => 'Proyektlər',
            'news_page' => 'Xəbərlər',
            'contact_page' => 'Əlaqə'
        ];
        $label = $menus[$request->menus];
        $prefix = $request->menus;
        $preData = [
            [
              'label'=>$label,
              'key'=>$request->menus.'_'.'name_title_az',
              'value'=>$request->name_title_az,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'label'=>$label,
                'key'=>$request->menus.'_'.'name_title_en',
                'value'=>$request->name_title_en,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'label'=>$label,
                'key'=>$request->menus.'_'.'name_description_az',
                'value'=>$request->name_description_az,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'label'=>$label,
                'key'=>$request->menus.'_'.'name_description_en',
                'value'=>$request->name_description_en,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'label'=>$label,
                'key'=>$request->menus.'_'.'property_og_site_name_az',
                'value'=>$request->property_og_site_name_az,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'label'=>$label,
                'key'=>$request->menus.'_'.'property_og_site_name_en',
                'value'=>$request->property_og_site_name_en,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'label'=>$label,
                'key'=>$request->menus.'_'.'property_og_url_az',
                'value'=>$request->property_og_url_az,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'label'=>$label,
                'key'=>$request->menus.'_'.'property_og_url_en',
                'value'=>$request->property_og_url_en,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'label'=>$label,
                'key'=>$request->menus.'_'.'property_og_title_az',
                'value'=>$request->property_og_title_az,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'label'=>$label,
                'key'=>$request->menus.'_'.'property_og_title_en',
                'value'=>$request->property_og_title_en,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'label'=>$label,
                'key'=>$request->menus.'_'.'property_og_description_az',
                'value'=>$request->property_og_description_az,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'label'=>$label,
                'key'=>$request->menus.'_'.'property_og_description_en',
                'value'=>$request->property_og_description_en,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'label'=>$label,
                'key'=>$request->menus.'_'.'property_twitter_url_az',
                'value'=>$request->property_twitter_url_az,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'label'=>$label,
                'key'=>$request->menus.'_'.'property_twitter_url_en',
                'value'=>$request->property_twitter_url_en,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'label'=>$label,
                'key'=>$request->menus.'_'.'property_twitter_title_az',
                'value'=>$request->property_twitter_title_az,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'label'=>$label,
                'key'=>$request->menus.'_'.'property_twitter_title_en',
                'value'=>$request->property_twitter_title_en,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'label'=>$label,
                'key'=>$request->menus.'_'.'property_twitter_description_az',
                'value'=>$request->property_twitter_description_az,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'label'=>$label,
                'key'=>$request->menus.'_'.'property_twitter_description_en',
                'value'=>$request->property_twitter_description_en,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]
        ];
        Meta::where('key','like',$prefix.'%')->delete();
        Meta::insert($preData);

        toastr()->success(__('static.data_ugurla_elave_etildi'));
        return redirect()->route('meta.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Meta  $meta
     * @return \Illuminate\Http\Response
     */
    public function show(Meta $meta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Meta  $meta
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $meta = Meta::findOrFail($id);
        return view('back.pages.meta.edit', compact('meta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Meta  $meta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $meta = Meta::findOrFail($id);
        $this->validate($request, [
            'edit_meta'=>'required|max:100'
        ],[],[
            'edit_meta'=>'Sahə'
        ]);

        $meta->update([
            'value'=>$request->edit_meta
        ]);

        toastr()->success(__('static.data_ugurla_yenilendi'));
        return redirect()->route('meta.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Meta  $meta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Meta $meta)
    {
        //
    }

    public function metaData(Request $request)
    {
        $data = Meta::where('key','like',$request->keyword.'%')->get();
        return response($data, 200);
    }
}
