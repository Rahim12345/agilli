@extends('back.layout.master')

@section('title') Options @endsection

@section('css')

@endsection

@section('content')
    <div class="content" style="margin-bottom: 100px">
        <div class="mb-3 col-md-12">
            <div class="content">
                <div class="mb-3 col-md-8 offset-md-2">
                    <form action="{{ route('option.store') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label class="form-label" for="unvan_az">Ünvan(AZ)</label>
                            <input type="text" class="form-control @error('unvan_az') is-invalid  @enderror" id="unvan_az" name="unvan_az" value="{{ old('unvan_az',$unvan_az) }}">
                            @error('unvan_az')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label" for="unvan_en">Ünvan(EN)</label>
                            <input type="text" class="form-control @error('unvan_en') is-invalid  @enderror" id="unvan_en" name="unvan_en" value="{{ old('unvan_en',$unvan_en) }}">
                            @error('unvan_en')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label" for="email">Email</label>
                            <input type="text" class="form-control @error('email') is-invalid  @enderror" id="email" name="email" value="{{ old('email',$email) }}">
                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label" for="tel">Telefon</label>
                            <input type="text" class="form-control @error('tel') is-invalid  @enderror" id="tel" name="tel" value="{{ old('tel',$tel) }}">
                            @error('tel')
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
