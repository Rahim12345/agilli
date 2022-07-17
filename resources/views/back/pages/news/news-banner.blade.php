@extends('back.layout.master')

@section('title') News @endsection

@section('css')

@endsection

@section('content')
    <div class="content" style="margin-bottom: 100px">
        <div class="mb-3 col-md-12">
            <div class="content">
                <div class="mb-3 col-md-8 offset-md-2">
                    <form action="{{ route('news.banner.post') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            @if($news_banner_src)
                                <img src="{{ asset('files/news-banner/'.$news_banner_src) }}" alt="" style="width: 100px">
                            @endif
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label" for="news_banner_src">Banner</label>
                            <input type="file" class="form-control @error('news_banner_src') is-invalid  @enderror" id="news_banner_src" name="news_banner_src">
                            @error('news_banner_src')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label" for="news_banner_button_text_az">Button(AZ)</label>
                            <input type="text" class="form-control @error('news_banner_button_text_az') is-invalid  @enderror" id="news_banner_button_text_az" name="news_banner_button_text_az" value="{{ old('news_banner_button_text_az',$news_banner_button_text_az) }}">
                            @error('news_banner_button_text_az')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label" for="news_banner_button_text_en">Button(EN)</label>
                            <input type="text" class="form-control @error('news_banner_button_text_en') is-invalid  @enderror" id="news_banner_button_text_en" name="news_banner_button_text_en" value="{{ old('news_banner_button_text_en',$news_banner_button_text_en) }}">
                            @error('news_banner_button_text_en')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label" for="news_banner_link">Link</label>
                            <input type="text" class="form-control @error('news_banner_link') is-invalid  @enderror" id="news_banner_link" name="news_banner_link" value="{{ old('news_banner_link',$news_banner_link ) }}">
                            @error('news_banner_link')
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
