@extends('back.layout.master')

@section('title') Partnyorlar @endsection

@section('css')

@endsection

@section('content')
    <div class="content" style="margin-bottom: 100px">
        <div class="mb-3 col-md-12">
            <div class="content">
                <div class="mb-3">
                    <form action="{{ route('home.partnyor.post') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="type" value="{{ $type }}">
                        <div class="row">
                            <div class="form-group mb-3 col-md-6">
                                <label class="form-label" for="home_partnyor_title_az">Title (AZ)</label>
                                <input type="text" name="home_partnyor_title_az" class="form-control @error('home_partnyor_title_az') is-invalid  @enderror" id="home_partnyor_title_az" value="{{ old('home_partnyor_title_az',$home_partnyor_title_az) }}">
                                @error('home_partnyor_title_az')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3 col-md-6">
                                <label class="form-label" for="home_partnyor_title_en">Title (EN)</label>
                                <input type="text" name="home_partnyor_title_en" class="form-control @error('home_partnyor_title_en') is-invalid  @enderror" id="home_partnyor_title_en" value="{{ old('home_partnyor_title_en',$home_partnyor_title_en) }}">
                                @error('home_partnyor_title_en')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3 col-md-6">
                                <label class="form-label" for="home_partnyor_text_az">Text (AZ)</label>
                                <textarea name="home_partnyor_text_az" class="form-control @error('home_partnyor_text_az') is-invalid  @enderror" id="home_partnyor_text_az" cols="30" rows="4">{{ old('home_partnyor_text_az',$home_partnyor_text_az) }}</textarea>
                                @error('home_partnyor_text_az')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3 col-md-6">
                                <label class="form-label" for="home_partnyor_text_en">Text (EN)</label>
                                <textarea name="home_partnyor_text_en" class="form-control @error('home_partnyor_text_en') is-invalid  @enderror" id="home_partnyor_text_en" cols="30" rows="4">{{ old('home_partnyor_text_en',$home_partnyor_text_en) }}</textarea>
                                @error('home_partnyor_text_en')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary float-end" type="submit">Əlavə et</button>
                        </div>
                    </form>

                </div>
                <div class="mb-3">
                <hr>
                <form action="{{ route('partnyorlar.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="type" value="{{ $type }}">
                    <div class="row">
                        <div class="form-group mb-3 col-md-12">
                            <label class="form-label" for="src">Image</label>
                            <input type="file" name="src" class="form-control @error('src') is-invalid  @enderror" id="src">
                            @error('src')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <button class="btn btn-primary float-end" type="submit">Əlavə et</button>
                        </div>
                    </div>
                </form>
                    <hr>
                    <table class="table col-md-4 m-auto">
                        @foreach($images as $image)
                            <tr>
                                <td><img src="{{ asset('files/partnyors/'.$image->src) }}" style="width: 100px;height: 100px" alt=""></td>
                                <td><input type="text" placeholder="Alt(AZ)" value="{{ $image->alt_az }}" class="form-control" oninput="alter({{ $image->id }}, 'alt_az', this.value)"></td>
                                <td><input type="text" placeholder="Alt(EN)" value="{{ $image->alt_en }}" class="form-control" oninput="alter({{ $image->id }}, 'alt_en', this.value)"></td>
                                <td>
                                    <form action="{{ route('partnyorlar.destroy',$image->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" onclick="return confirm('Silmək istədiyinizdən əminsiniz?')"><i class="fa fa-times"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        function alter(id, action, text) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type : 'POST',
                data : {
                    id,
                    action,
                    text
                },
                url  : '{!! route('partner.alt') !!}',
                success :  function (response) {
                    // toastr.success(response);
                },
                error : function (myErrors) {
                    $.each(myErrors.responseJSON.errors, function (key, error) {
                        toastr.error(error);
                    })
                }
            });
        }
    </script>
@endsection
