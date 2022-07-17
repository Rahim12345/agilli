@extends('back.layout.master')

@section('title') News @endsection

@section('css')

@endsection

@section('content')
    <div class="content" style="margin-bottom: 100px">
        <div class="mb-3 col-md-12">
            <div class="content">
                <div class="row">
                    <a href="{{ route('news.index') }}" class="btn btn-danger">Bütün</a>
                </div>
                <div class="mb-3">
                    <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="form-group mb-3 col-md-12">
                                <label class="form-label" for="cover">Cover</label>
                                <input type="file" class="form-control @error('cover') is-invalid  @enderror" id="cover" name="cover">
                                @error('cover')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3 col-md-6">
                                <label class="form-label" for="title_az">Title (AZ)</label>
                                <input type="text" class="form-control @error('title_az') is-invalid  @enderror" id="title_az" name="title_az" value="{{ old('title_az') }}">
                                @error('title_az')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3 col-md-6">
                                <label class="form-label" for="title_en">Title (EN)</label>
                                <input type="text" class="form-control @error('title_en') is-invalid  @enderror" id="title_en" name="title_en" value="{{ old('title_en') }}">
                                @error('title_en')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3 col-md-6">
                                <label class="form-label" for="author_az">Author (AZ)</label>
                                <input type="text" class="form-control @error('author_az') is-invalid  @enderror" id="author_az" name="author_az" value="{{ old('author_az') }}">
                                @error('author_az')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3 col-md-6">
                                <label class="form-label" for="author_en">Author (EN)</label>
                                <input type="text" class="form-control @error('author_en') is-invalid  @enderror" id="author_en" name="author_en" value="{{ old('author_en') }}">
                                @error('author_en')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3 col-md-6">
                                <label class="form-label" for="release_date_az">Release date (AZ)</label>
                                <input type="text" class="form-control @error('release_date_az') is-invalid  @enderror" id="release_date_az" name="release_date_az" value="{{ old('release_date_az') }}">
                                @error('release_date_az')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3 col-md-6">
                                <label class="form-label" for="release_date_en">Release date (EN)</label>
                                <input type="text" class="form-control @error('release_date_en') is-invalid  @enderror" id="release_date_en" name="release_date_en" value="{{ old('release_date_en') }}">
                                @error('release_date_en')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3 col-md-6">
                                <label class="form-label" for="text_1_az">Text 1 (AZ)</label>
                                <textarea name="text_1_az" id="text_1_az" cols="30" rows="4" class="form-control @error('text_1_az') is-invalid  @enderror">{{ old('text_1_az') }}</textarea>
                                @error('text_1_az')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3 col-md-6">
                                <label class="form-label" for="text_1_en">Text 1 (EN)</label>
                                <textarea name="text_1_en" id="text_1_en" cols="30" rows="4" class="form-control @error('text_1_en') is-invalid  @enderror">{{ old('text_1_en') }}</textarea>
                                @error('text_1_en')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3 col-md-12">
                                <label class="form-label" for="image_1">Image 1</label>
                                <input type="file" class="form-control @error('image_1') is-invalid  @enderror" id="image_1" name="image_1">
                                @error('image_1')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3 col-md-6">
                                <label class="form-label" for="text_2_az">Text 2 (AZ)</label>
                                <textarea name="text_2_az" id="text_2_az" cols="30" rows="4" class="form-control @error('text_2_az') is-invalid  @enderror">{{ old('text_2_az') }}</textarea>
                                @error('text_2_az')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3 col-md-6">
                                <label class="form-label" for="text_2_en">Text 2 (EN)</label>
                                <textarea name="text_2_en" id="text_2_en" cols="30" rows="4" class="form-control @error('text_2_en') is-invalid  @enderror">{{ old('text_2_en') }}</textarea>
                                @error('text_2_en')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3 col-md-12">
                                <label class="form-label" for="image_2">Image 2</label>
                                <input type="file" class="form-control @error('image_2') is-invalid  @enderror" id="image_2" name="image_2">
                                @error('image_2')
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
