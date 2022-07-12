@extends('back.layout.master')

@section('title') Startegiya Kreativ Digital @endsection

@section('css')

@endsection

@section('content')
    <div class="content" style="margin-bottom: 100px">
        <div class="mb-3 col-md-12">
            <div class="content">
                <div class="mb-3">
                    <form action="{{ route('home.banner.post') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="form-group mb-3 col-md-6">
                                <label class="form-label" for="home_title_1_az">Title 1 (AZ)</label>
                                <input type="text" name="home_title_1_az" class="form-control @error('home_title_1_az') is-invalid  @enderror" id="home_title_1_az" value="{{ old('home_title_1_az',$home_title_1_az) }}">
                                @error('home_title_1_az')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3 col-md-6">
                                <label class="form-label" for="home_title_1_en">Title 1 (EN)</label>
                                <input type="text" name="home_title_1_en" class="form-control @error('home_title_1_en') is-invalid  @enderror" id="home_title_1_en" value="{{ old('home_title_1_en',$home_title_1_en) }}">
                                @error('home_title_1_en')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3 col-md-6">
                                <label class="form-label" for="home_title_2_az">Title 2 (AZ)</label>
                                <input type="text" name="home_title_2_az" class="form-control @error('home_title_2_az') is-invalid  @enderror" id="home_title_2_az" value="{{ old('home_title_2_az',$home_title_2_az) }}">
                                @error('home_title_2_az')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3 col-md-6">
                                <label class="form-label" for="home_title_2_en">Title 2 (EN)</label>
                                <input type="text" name="home_title_2_en" class="form-control @error('home_title_2_en') is-invalid  @enderror" id="home_title_2_en" value="{{ old('home_title_2_en',$home_title_2_en) }}">
                                @error('home_title_2_en')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3 col-md-6">
                                <label class="form-label" for="home_title_3_az">Title 3 (AZ)</label>
                                <input type="text" name="home_title_3_az" class="form-control @error('home_title_3_az') is-invalid  @enderror" id="home_title_3_az" value="{{ old('home_title_3_az',$home_title_3_az) }}">
                                @error('home_title_3_az')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3 col-md-6">
                                <label class="form-label" for="home_title_3_en">Title 3 (EN)</label>
                                <input type="text" name="home_title_3_en" class="form-control @error('home_title_3_en') is-invalid  @enderror" id="home_title_3_en" value="{{ old('home_title_3_en',$home_title_3_en) }}">
                                @error('home_title_3_en')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3 col-md-6">
                                <label class="form-label" for="home_text_1_az">Text 1 (AZ)</label>
                                <textarea name="home_text_1_az" class="form-control @error('home_text_1_az') is-invalid  @enderror" id="home_text_1_az" cols="30" rows="4">{{ old('home_text_1_az',$home_text_1_az) }}</textarea>
                                @error('home_text_1_az')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3 col-md-6">
                                <label class="form-label" for="home_text_1_en">Text 1 (EN)</label>
                                <textarea name="home_text_1_en" class="form-control @error('home_text_1_en') is-invalid  @enderror" id="home_text_1_en" cols="30" rows="4">{{ old('home_text_1_en',$home_text_1_en) }}</textarea>
                                @error('home_text_1_en')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3 col-md-6">
                                <label class="form-label" for="home_text_2_az">Text 2 (AZ)</label>
                                <textarea name="home_text_2_az" class="form-control @error('home_text_2_az') is-invalid  @enderror" id="home_text_2_az" cols="30" rows="4">{{ old('home_text_2_az',$home_text_2_az) }}</textarea>
                                @error('home_text_2_az')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3 col-md-6">
                                <label class="form-label" for="home_text_2_en">Text 2 (EN)</label>
                                <textarea name="home_text_2_en" class="form-control @error('home_text_2_en') is-invalid  @enderror" id="home_text_2_en" cols="30" rows="4">{{ old('home_text_2_en',$home_text_2_en) }}</textarea>
                                @error('home_text_2_en')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3 col-md-6">
                                <label class="form-label" for="home_text_3_az">Text 3 (AZ)</label>
                                <textarea name="home_text_3_az" class="form-control @error('home_text_3_az') is-invalid  @enderror" id="home_text_3_az" cols="30" rows="4">{{ old('home_text_3_az',$home_text_3_az) }}</textarea>
                                @error('home_text_3_az')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3 col-md-6">
                                <label class="form-label" for="home_text_3_en">Text 3 (EN)</label>
                                <textarea name="home_text_3_en" class="form-control @error('home_text_3_en') is-invalid  @enderror" id="home_text_3_en" cols="30" rows="4">{{ old('home_text_3_en',$home_text_3_en) }}</textarea>
                                @error('home_text_3_en')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary float-end" type="submit">Əlavə et</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection
