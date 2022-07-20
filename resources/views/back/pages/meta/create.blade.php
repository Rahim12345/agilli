@extends('back.layout.master')

@section('title') Blog @endsection

@section('css')

@endsection

@section('content')
    <div class="content" style="margin-bottom: 100px">
        <div class="mb-3 col-md-12">
            <div class="content p-3">
                <form action="{{ route('meta.store') }}" id="contact-form" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="form-group mb-3">
                            <label class="form-label" for="menus">Menu</label>
                            <select name="menus" id="menus" class="form-control">
                                <option value="">Birini seçin</option>
                                <option value="main_page">{{ __('menu.home') }}</option>
                                <option value="about_page">{{ __('menu.about') }}</option>
                                <option value="works_page">{{ __('menu.works') }}</option>
                                <option value="news_page">{{ __('menu.news') }}</option>
                                <option value="contact_page">{{ __('menu.contact') }}</option>
                            </select>
                            @error('menus')
                            <small class="text-danger" id="menus-error">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-3 col-md-6">
                            <label class="form-label" for="name_title_az">{{ '<meta name="title" content=" AZ? ">' }}</label>
                            <input type="text" name="name_title_az" id="name_title_az" class="form-control w-100 @error('name_title_az') is-invalid  @enderror" value="{{ old('name_title_az') }}">
                            @error('name_title_az')
                            <small class="text-danger" id="name_title_az-error">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group mb-3 col-md-6">
                            <label class="form-label" for="name_title_en">{{ '<meta name="title" content=" EN? ">' }}</label>
                            <input type="text" name="name_title_en" id="name_title_en" class="form-control w-100 @error('name_title_en') is-invalid  @enderror" value="{{ old('name_title_en') }}">
                            @error('name_title_en')
                            <small class="text-danger" id="name_title_en-error">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group mb-3 col-md-6">
                            <label class="form-label" for="name_description_az">{{ '<meta name="description" content=" AZ? ">' }}</label>
                            <input type="text" name="name_description_az" id="name_description_az" class="form-control w-100 @error('name_description_az') is-invalid  @enderror" value="{{ old('name_description_az') }}">
                            @error('name_description_az')
                            <small class="text-danger" id="name_description_az-error">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group mb-3 col-md-6">
                            <label class="form-label" for="name_description_en">{{ '<meta name="description" content=" EN? ">' }}</label>
                            <input type="text" name="name_description_en" id="name_description_en" class="form-control w-100 @error('name_description_en') is-invalid  @enderror" value="{{ old('name_description_en') }}">
                            @error('name_description_az')
                            <small class="text-danger" id="name_description_en-error">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group mb-3 col-md-6">
                            <label class="form-label" for="property_og_site_name_az">{{ '<meta property="og:site_name" content=" AZ? " />' }}</label>
                            <input type="text" name="property_og_site_name_az" id="property_og_site_name_az" class="form-control w-100 @error('property_og_site_name_az') is-invalid  @enderror" value="{{ old('property_og_site_name_az') }}">
                            @error('property_og_site_name_az')
                            <small class="text-danger" id="property_og_site_name_az-error">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group mb-3 col-md-6">
                            <label class="form-label" for="property_og_site_name_en">{{ '<meta property="og:site_name" content=" EN? " />' }}</label>
                            <input type="text" name="property_og_site_name_en" id="property_og_site_name_en" class="form-control w-100 @error('property_og_site_name_en') is-invalid  @enderror" value="{{ old('property_og_site_name_en') }}">
                            @error('property_og_site_name_en')
                            <small class="text-danger" id="property_og_site_name_en-error">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group mb-3 col-md-6">
                            <label class="form-label" for="property_og_url_az">{{ '<meta property="og:url" content=" AZ? ">' }}</label>
                            <input type="text" name="property_og_url_az" id="property_og_url_az" class="form-control w-100 @error('property_og_url_az') is-invalid  @enderror" value="{{ old('property_og_url_az') }}">
                            @error('property_og_url_az')
                            <small class="text-danger" id="property_og_url_az-error">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group mb-3 col-md-6">
                            <label class="form-label" for="property_og_url_en">{{ '<meta property="og:url" content=" EN? ">' }}</label>
                            <input type="text" name="property_og_url_en" id="property_og_url_en" class="form-control w-100 @error('property_og_url_en') is-invalid  @enderror" value="{{ old('property_og_url_en') }}">
                            @error('property_og_url_en')
                            <small class="text-danger" id="property_og_url_en-error">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group mb-3 col-md-6">
                            <label class="form-label" for="property_og_title_az">{{ '<meta property="og:title" content=" AZ? ">' }}</label>
                            <input type="text" name="property_og_title_az" id="property_og_title_az" class="form-control w-100 @error('property_og_title_az') is-invalid  @enderror" value="{{ old('property_og_title_az') }}">
                            @error('property_og_title_az')
                            <small class="text-danger" id="property_og_title_az-error">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group mb-3 col-md-6">
                            <label class="form-label" for="property_og_title_en">{{ '<meta property="og:title" content=" EN? ">' }}</label>
                            <input type="text" name="property_og_title_en" id="property_og_title_en" class="form-control w-100 @error('property_og_title_en') is-invalid  @enderror" value="{{ old('property_og_title_en') }}">
                            @error('property_og_title_en')
                            <small class="text-danger" id="property_og_title_en-error">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group mb-3 col-md-6">
                            <label class="form-label" for="property_og_description_az">{{ '<meta property="og:description" content=" AZ? ">' }}</label>
                            <input type="text" name="property_og_description_az" id="property_og_description_az" class="form-control w-100 @error('property_og_description_az') is-invalid  @enderror" value="{{ old('property_og_description_az') }}">
                            @error('property_og_description_az')
                            <small class="text-danger" id="property_og_description_az-error">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group mb-3 col-md-6">
                            <label class="form-label" for="property_og_description_en">{{ '<meta property="og:description" content=" EN? ">' }}</label>
                            <input type="text" name="property_og_description_en" id="property_og_description_en" class="form-control w-100 @error('property_og_description_en') is-invalid  @enderror" value="{{ old('property_og_description_en') }}">
                            @error('property_og_description_en')
                            <small class="text-danger" id="property_og_description_en-error">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group mb-3 col-md-6">
                            <label class="form-label" for="property_twitter_url_az">{{ '<meta property="twitter:url" content=" AZ? ">' }}</label>
                            <input type="text" name="property_twitter_url_az" id="property_twitter_url_az" class="form-control w-100 @error('property_twitter_url_az') is-invalid  @enderror" value="{{ old('property_twitter_url_az') }}">
                            @error('property_twitter_url_az')
                            <small class="text-danger" id="property_twitter_url_az-error">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group mb-3 col-md-6">
                            <label class="form-label" for="property_twitter_url_en">{{ '<meta property="twitter:url" content=" EN? ">' }}</label>
                            <input type="text" name="property_twitter_url_en" id="property_twitter_url_en" class="form-control w-100 @error('property_twitter_url_en') is-invalid  @enderror" value="{{ old('property_twitter_url_en') }}">
                            @error('property_twitter_url_en')
                            <small class="text-danger" id="property_twitter_url_en-error">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group mb-3 col-md-6">
                            <label class="form-label" for="property_twitter_title_az">{{ '<meta property="twitter:title" content=" AZ? ">' }}</label>
                            <input type="text" name="property_twitter_title_az" id="property_twitter_title_az" class="form-control w-100 @error('property_twitter_title_az') is-invalid  @enderror" value="{{ old('property_twitter_title_az') }}">
                            @error('property_twitter_title_az')
                            <small class="text-danger" id="property_twitter_title_az-error">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group mb-3 col-md-6">
                            <label class="form-label" for="property_twitter_title_en">{{ '<meta property="twitter:title" content=" EN? ">' }}</label>
                            <input type="text" name="property_twitter_title_en" id="property_twitter_title_en" class="form-control w-100 @error('property_twitter_title_en') is-invalid  @enderror" value="{{ old('property_twitter_title_en') }}">
                            @error('property_twitter_title_en')
                            <small class="text-danger" id="property_twitter_title_en-error">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group mb-3 col-md-6">
                            <label class="form-label" for="property_twitter_description_az">{{ '<meta property="twitter:description" content=" AZ? ">' }}</label>
                            <input type="text" name="property_twitter_description_az" id="property_twitter_description_az" class="form-control w-100 @error('property_twitter_description_az') is-invalid  @enderror" value="{{ old('property_twitter_description_az') }}">
                            @error('property_twitter_description_az')
                            <small class="text-danger" id="property_twitter_description_az-error">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group mb-3 col-md-6">
                            <label class="form-label" for="property_twitter_description_en">{{ '<meta property="twitter:description" content=" EN? ">' }}</label>
                            <input type="text" name="property_twitter_description_en" id="property_twitter_description_en" class="form-control w-100 @error('property_twitter_description_en') is-invalid  @enderror" value="{{ old('property_twitter_description_en') }}">
                            @error('property_twitter_description_en')
                            <small class="text-danger" id="property_twitter_description_en-error">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group mb-3">
                        <button class="btn btn-primary float-end" type="submit">Əlavə et</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function () {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#menus').change(function () {
                $('input[type="text"]').val('');
                let keyword = $(this).val();
                $.ajax({
                    type : "POST",
                    url  : "{!! route('meta.data') !!}",
                    data : { keyword : keyword },
                    success : function (response) {
                        $.each(response, function (key, item) {
                            $('#'+(item.key.split(keyword + '_')[1])).val(item.value);
                        })
                    }
                });
            })
        });
    </script>
@endsection
