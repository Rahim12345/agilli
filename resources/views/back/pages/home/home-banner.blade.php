@extends('back.layout.master')

@section('title') Home Banner @endsection

@section('css')

@endsection

@section('content')
    <div class="content" style="margin-bottom: 100px">
        <div class="mb-3 col-md-12">
            <div class="content">
                <div class="mb-3 col-md-8 offset-md-2">
                    <form action="{{ route('home.banner.post') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            @if($home_banner_src)
                                <img src="{{ asset('files/home-banner/'.$home_banner_src) }}" alt="" style="width: 100px">
                            @endif
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label" for="home_banner_src">Banner</label>
                            <input type="file" class="form-control @error('home_banner_src') is-invalid  @enderror" id="home_banner_src" name="home_banner_src">
                            @error('home_banner_src')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label" for="home_banner_src_alt_az">Alt(AZ)</label>
                            <input type="text" class="form-control @error('home_banner_src_alt_az') is-invalid  @enderror" id="home_banner_src_alt_az" name="home_banner_src_alt_az" value="{{ old('home_banner_src_alt_az',$home_banner_src_alt_az) }}">
                            @error('home_banner_src_alt_az')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label" for="home_banner_src_alt_en">Alt(EN)</label>
                            <input type="text" class="form-control @error('home_banner_src_alt_en') is-invalid  @enderror" id="home_banner_src_alt_en" name="home_banner_src_alt_en" value="{{ old('home_banner_src_alt_en',$home_banner_src_alt_en) }}">
                            @error('home_banner_src_alt_en')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label" for="home_banner_text_az">Text(AZ)</label>
                            <textarea name="home_banner_text_az" class="form-control @error('home_banner_text_az') is-invalid  @enderror" id="home_banner_text_az" cols="30" rows="4">{{ old('home_banner_text_az',$home_banner_text_az) }}</textarea>
                            @error('home_banner_text_az')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label" for="home_banner_text_en">Text(EN)</label>
                            <textarea name="home_banner_text_en" class="form-control @error('home_banner_text_en') is-invalid  @enderror" id="home_banner_text_en" cols="30" rows="4">{{ old('home_banner_text_en',$home_banner_text_en) }}</textarea>
                            @error('home_banner_text_en')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label" for="home_banner_button_text_az">Button(AZ)</label>
                            <input type="text" class="form-control @error('home_banner_button_text_az') is-invalid  @enderror" id="home_banner_button_text_az" name="home_banner_button_text_az" value="{{ old('home_banner_button_text_az',$home_banner_button_text_az) }}">
                            @error('home_banner_button_text_az')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label" for="home_banner_button_text_en">Button(EN)</label>
                            <input type="text" class="form-control @error('home_banner_button_text_en') is-invalid  @enderror" id="home_banner_button_text_en" name="home_banner_button_text_en" value="{{ old('home_banner_button_text_en',$home_banner_button_text_en) }}">
                            @error('home_banner_button_text_en')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label" for="home_banner_link">Link</label>
                            <input type="text" class="form-control @error('home_banner_link') is-invalid  @enderror" id="home_banner_link" name="home_banner_link" value="{{ old('home_banner_link',$home_banner_link) }}">
                            @error('home_banner_link')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
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
