@extends('back.layout.master')

@section('title') Projects @endsection

@section('css')

@endsection

@section('content')
    <div class="content" style="margin-bottom: 100px">
        <div class="mb-3 col-md-12">
            <div class="content">
                <div class="row">
                    <a href="{{ route('project.index') }}" class="btn btn-danger">Bütün</a>
                </div>
                <div class="mb-3">
                    <form action="{{ route('project.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="form-group mb-3 col-md-12">
                                <label class="form-label" for="cover">Cover</label>
                                <input type="file" class="form-control @error('cover') is-invalid  @enderror" id="cover" name="cover">
                                @error('cover')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3 col-md-12">
                                <label class="form-label" for="category_id">Category</label>
                                <select name="category_id" id="category_id"  class="form-control @error('category_id') is-invalid  @enderror">
                                    <option value="">Birini seçin</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" {{ $category->id == old('category_id') ? 'selected' : '' }}>{{ $category->name_az }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3 col-md-6">
                                <label class="form-label" for="title_1_az">Title 1(AZ)</label>
                                <input type="text" class="form-control @error('title_1_az') is-invalid  @enderror" id="title_1_az" name="title_1_az" value="{{ old('title_1_az') }}">
                                @error('title_1_az')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3 col-md-6">
                                <label class="form-label" for="title_1_en">Title 1(EN)</label>
                                <input type="text" class="form-control @error('title_1_en') is-invalid  @enderror" id="title_1_en" name="title_1_en" value="{{ old('title_1_en') }}">
                                @error('title_1_en')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3 col-md-6">
                                <label class="form-label" for="title_2_az">Title 2(AZ)</label>
                                <input type="text" class="form-control @error('title_2_az') is-invalid  @enderror" id="title_2_az" name="title_2_az" value="{{ old('title_2_az') }}">
                                @error('title_2_az')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3 col-md-6">
                                <label class="form-label" for="title_2_en">Title 2(EN)</label>
                                <input type="text" class="form-control @error('title_2_en') is-invalid  @enderror" id="title_2_en" name="title_2_en" value="{{ old('title_2_en') }}">
                                @error('title_2_en')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3 col-md-6">
                                <label class="form-label" for="text_az">Text (AZ)</label>
                                <textarea name="text_az" id="text_az" cols="30" rows="4" class="form-control @error('text_az') is-invalid  @enderror">{{ old('text_az') }}</textarea>
                                @error('text_az')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3 col-md-6">
                                <label class="form-label" for="text_en">Text (EN)</label>
                                <textarea name="text_en" id="text_en" cols="30" rows="4" class="form-control @error('text_en') is-invalid  @enderror">{{ old('text_en') }}</textarea>
                                @error('text_en')
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
                                <label class="form-label" for="client_az">Client (AZ)</label>
                                <input type="text" class="form-control @error('client_az') is-invalid  @enderror" id="client_az" name="client_az" value="{{ old('client_az') }}">
                                @error('client_az')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3 col-md-6">
                                <label class="form-label" for="client_en">Client (EN)</label>
                                <input type="text" class="form-control @error('client_en') is-invalid  @enderror" id="client_en" name="client_en" value="{{ old('client_en') }}">
                                @error('client_en')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3 col-md-6">
                                <label class="form-label" for="art_director_az">Art director (AZ)</label>
                                <input type="text" class="form-control @error('art_director_az') is-invalid  @enderror" id="art_director_az" name="art_director_az" value="{{ old('art_director_az') }}">
                                @error('art_director_az')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3 col-md-6">
                                <label class="form-label" for="art_director_en">Art director (EN)</label>
                                <input type="text" class="form-control @error('art_director_en') is-invalid  @enderror" id="art_director_en" name="art_director_en" value="{{ old('art_director_en') }}">
                                @error('art_director_en')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3 col-md-6">
                                <label class="form-label" for="designer_az">Designer (AZ)</label>
                                <input type="text" class="form-control @error('designer_az') is-invalid  @enderror" id="designer_az" name="designer_az" value="{{ old('designer_az') }}">
                                @error('designer_az')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3 col-md-6">
                                <label class="form-label" for="designer_en">Designer (EN)</label>
                                <input type="text" class="form-control @error('designer_en') is-invalid  @enderror" id="designer_en" name="designer_en" value="{{ old('designer_en') }}">
                                @error('designer_en')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3 col-md-6">
                                <label class="form-label" for="copyrighter_az">Copyrighter (AZ)</label>
                                <input type="text" class="form-control @error('copyrighter_az') is-invalid  @enderror" id="copyrighter_az" name="copyrighter_az" value="{{ old('copyrighter_az') }}">
                                @error('copyrighter_az')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3 col-md-6">
                                <label class="form-label" for="copyrighter_en">Copyrighter (EN)</label>
                                <input type="text" class="form-control @error('copyrighter_en') is-invalid  @enderror" id="copyrighter_en" name="copyrighter_en" value="{{ old('copyrighter_en') }}">
                                @error('copyrighter_en')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3 col-md-12">
                                <label class="form-label" for="images">Images</label>
                                <input type="file" class="form-control @error('images') is-invalid  @enderror" id="images" name="images[]" multiple>
                                @error('images')
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
