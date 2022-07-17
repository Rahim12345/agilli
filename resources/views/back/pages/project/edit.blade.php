@extends('back.layout.master')

@section('title')
    Projects
@endsection

@section('css')
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> --}}
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" /> --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css" type="text/css">
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"
        integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script>
@endsection

@section('content')
    <div class="content" style="margin-bottom: 100px">
        <div class="mb-3 col-md-12">
            <div class="content">
                <div class="row">
                    <a href="{{ route('project.create') }}" class="btn btn-primary float-start w-50">Yeni</a>
                    <a href="{{ route('project.index') }}" class="btn btn-danger float-end w-50">Bütün</a>
                </div>
                <div class="mb-3">
                    <form action="{{ route('project.update', $project->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            @if ($project->cover)
                                <img src="{{ asset('files/project-banner/' . $project->cover) }}" style="width: 200px"
                                    alt="">
                            @endif
                        </div>
                        <div class="row">
                            <div class="form-group mb-3 col-md-12">
                                <label class="form-label" for="cover">Cover</label>
                                <input type="file" class="form-control @error('cover') is-invalid @enderror"
                                    id="cover" name="cover">
                                @error('cover')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3 col-md-12">
                                <label class="form-label" for="category_id">Category</label>
                                <select name="category_id" id="category_id"  class="form-control @error('category_id') is-invalid  @enderror">
                                    <option value="">Birini seçin</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" {{ $category->id == old('category_id',$project->category_id) ? 'selected' : '' }}>{{ $category->name_az }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3 col-md-6">
                                <label class="form-label" for="title_1_az">Title 1(AZ)</label>
                                <input type="text" class="form-control @error('title_1_az') is-invalid @enderror"
                                    id="title_1_az" name="title_1_az"
                                    value="{{ old('title_1_az', $project->title_1_az) }}">
                                @error('title_1_az')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3 col-md-6">
                                <label class="form-label" for="title_1_en">Title 1(EN)</label>
                                <input type="text" class="form-control @error('title_1_en') is-invalid @enderror"
                                    id="title_1_en" name="title_1_en"
                                    value="{{ old('title_1_en', $project->title_1_en) }}">
                                @error('title_1_en')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3 col-md-6">
                                <label class="form-label" for="title_2_az">Title 2(AZ)</label>
                                <input type="text" class="form-control @error('title_2_az') is-invalid @enderror"
                                    id="title_2_az" name="title_2_az"
                                    value="{{ old('title_2_az', $project->title_2_az) }}">
                                @error('title_2_az')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3 col-md-6">
                                <label class="form-label" for="title_2_en">Title 2(EN)</label>
                                <input type="text" class="form-control @error('title_2_en') is-invalid @enderror"
                                    id="title_2_en" name="title_2_en"
                                    value="{{ old('title_2_en', $project->title_2_en) }}">
                                @error('title_2_en')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3 col-md-6">
                                <label class="form-label" for="text_az">Text (AZ)</label>
                                <textarea name="text_az" id="text_az" cols="30" rows="4"
                                    class="form-control @error('text_az') is-invalid @enderror">{{ old('text_az', $project->text_az) }}</textarea>
                                @error('text_az')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3 col-md-6">
                                <label class="form-label" for="text_en">Text (EN)</label>
                                <textarea name="text_en" id="text_en" cols="30" rows="4"
                                    class="form-control @error('text_en') is-invalid @enderror">{{ old('text_en', $project->text_en) }}</textarea>
                                @error('text_en')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3 col-md-6">
                                <label class="form-label" for="release_date_az">Release date (AZ)</label>
                                <input type="text" class="form-control @error('release_date_az') is-invalid @enderror"
                                    id="release_date_az" name="release_date_az"
                                    value="{{ old('release_date_az', $project->release_date_az) }}">
                                @error('release_date_az')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3 col-md-6">
                                <label class="form-label" for="release_date_en">Release date (EN)</label>
                                <input type="text" class="form-control @error('release_date_en') is-invalid @enderror"
                                    id="release_date_en" name="release_date_en"
                                    value="{{ old('release_date_en', $project->release_date_en) }}">
                                @error('release_date_en')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3 col-md-6">
                                <label class="form-label" for="client_az">Client (AZ)</label>
                                <input type="text" class="form-control @error('client_az') is-invalid @enderror"
                                    id="client_az" name="client_az"
                                    value="{{ old('client_az', $project->client_az) }}">
                                @error('client_az')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3 col-md-6">
                                <label class="form-label" for="client_en">Client (EN)</label>
                                <input type="text" class="form-control @error('client_en') is-invalid @enderror"
                                    id="client_en" name="client_en"
                                    value="{{ old('client_en', $project->client_en) }}">
                                @error('client_en')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3 col-md-6">
                                <label class="form-label" for="art_director_az">Art director (AZ)</label>
                                <input type="text" class="form-control @error('art_director_az') is-invalid @enderror"
                                    id="art_director_az" name="art_director_az"
                                    value="{{ old('art_director_az', $project->art_director_az) }}">
                                @error('art_director_az')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3 col-md-6">
                                <label class="form-label" for="art_director_en">Art director (EN)</label>
                                <input type="text" class="form-control @error('art_director_en') is-invalid @enderror"
                                    id="art_director_en" name="art_director_en"
                                    value="{{ old('art_director_en', $project->art_director_en) }}">
                                @error('art_director_en')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3 col-md-6">
                                <label class="form-label" for="designer_az">Designer (AZ)</label>
                                <input type="text" class="form-control @error('designer_az') is-invalid @enderror"
                                    id="designer_az" name="designer_az"
                                    value="{{ old('designer_az', $project->designer_az) }}">
                                @error('designer_az')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3 col-md-6">
                                <label class="form-label" for="designer_en">Designer (EN)</label>
                                <input type="text" class="form-control @error('designer_en') is-invalid @enderror"
                                    id="designer_en" name="designer_en"
                                    value="{{ old('designer_en', $project->designer_en) }}">
                                @error('designer_en')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3 col-md-6">
                                <label class="form-label" for="copyrighter_az">Copyrighter (AZ)</label>
                                <input type="text" class="form-control @error('copyrighter_az') is-invalid @enderror"
                                    id="copyrighter_az" name="copyrighter_az"
                                    value="{{ old('copyrighter_az', $project->copyrighter_az) }}">
                                @error('copyrighter_az')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3 col-md-6">
                                <label class="form-label" for="copyrighter_en">Copyrighter (EN)</label>
                                <input type="text" class="form-control @error('copyrighter_en') is-invalid @enderror"
                                    id="copyrighter_en" name="copyrighter_en"
                                    value="{{ old('copyrighter_en', $project->copyrighter_en) }}">
                                @error('copyrighter_en')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3 col-md-12">
                                <label class="form-label" for="images">Images</label>
                                <input type="file" class="form-control @error('images') is-invalid @enderror"
                                    id="images" name="images[]" multiple>
                                @error('images')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary float-end" type="submit">Redaktə et</button>
                        </div>
                    </form>
                    <hr class="mt-5">
                    <div class="row">
                        <table class="table table-bordered">
                            <tbody style="cursor: all-scroll;">
                                {{-- @foreach ($project->images as $image)
                                    <tr>
                                        <td>
                                            <img src="{{ asset('files/project-images/' . $image->src) }}"
                                                style="width: 200px" alt="">
                                        </td>
                                        <td>
                                            <div class="btn-list flex-nowrap">
                                                <a href="{{ route('project-images.edit', $image->id) }}"
                                                    class="btn btn-primary">{{ $image->col_12 == 0 ? 'col-12 et' : 'col-8 et' }}</a>
                                                <div>
                                                    <form action="{{ route('project-images.destroy', $image->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger"
                                                            onclick="return confirm('Are you sure to delete this?')"><i
                                                                class="fa fa-times"></i></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            load_data();

            function load_data() {
                $.ajax({
                    url: "{!! route('project-images.index') !!}",
                    method: "GET",
                    data: {
                        action: 'fetch_data',
                        project_id: '{!! $project->id !!}'
                    },
                    dataType: 'json',
                    success: function(data) {
                        var html = '';
                        for (var count = 0; count < data.length; count++) {
                            html += '<tr id="' + data[count].id + '">';
                            html += `<td><img src="/files/project-images/`+data[count].src+`"
                            style = "width: 200px"  alt = "" >`;
                            html += `<td>
                                <div class="btn-list flex-nowrap">
                                    <a href="/admin/project-images/`+data[count].id+`/edit"
                                        class="btn btn-primary">`+ (data[count].col_12 == 0 ? `col-12 et` : `col-8 et`) +`</a>
                                    <div>
                                        <form action="/admin/project-images/`+data[count].id+`"
                                            method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger"
                                                onclick="return confirm('Are you sure to delete this?')"><i
                                                    class="fa fa-times"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </td>`;
                            html += '</tr>';
                        }

                        $('tbody').html(html);
                    }
                })
            }

            $('tbody').sortable({
                placeholder: "ui-state-highlight",
                update: function(event, ui) {
                    var page_id_array = new Array();
                    $('tbody tr').each(function() {
                        page_id_array.push($(this).attr('id'));
                    });

                    $.ajax({
                        url: "{!! route('project-images.index') !!}",
                        method: "GET",
                        data: {
                            page_id_array: page_id_array,
                            project_id: '{!! $project->id !!}',
                            action: 'update'
                        },
                        success: function() {
                            toastr.success('Şəkillər yenidən sıralandı');
                            load_data();
                        }
                    })
                }
            });

        });
    </script>
@endsection
