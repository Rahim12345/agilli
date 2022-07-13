@extends('back.layout.master')

@section('title') Projects @endsection

@section('css')

@endsection

@section('content')
    <div class="content" style="margin-bottom: 100px">
        <div class="mb-3 col-md-12">
            <div class="content">
                <div class="mb-3 col-md-8 offset-md-2">
                    @if(Route::currentRouteName() == 'category.edit')
                        <form action="{{ route('category.update',$category->id) }}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                    @else
                        <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                    @endif
                            @csrf
                        <div class="form-group mb-3">
                            <label class="form-label" for="name_az">Name(AZ)</label>
                            <input type="text" class="form-control @error('name_az') is-invalid  @enderror" id="name_az" name="name_az"  value="{{ old('name_az',Route::currentRouteName() == 'category.edit' ? $category->name_az : '') }}">
                            @error('name_az')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label" for="name_en">Name(EN)</label>
                            <input type="text" class="form-control @error('name_en') is-invalid  @enderror" id="name_en" name="name_en"  value="{{ old('name_en',Route::currentRouteName() == 'category.edit' ? $category->name_en : '') }}">
                            @error('name_en')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            @if(Route::currentRouteName() == 'category.edit')
                                <button class="btn btn-primary float-end" type="submit">Redaktə et</button>
                                <button class="btn btn-primary float-left" type="button" onclick="window.location.href='{!! route('category.index') !!}'">Yeni</button>
                            @else
                                <button class="btn btn-primary float-end" type="submit">Əlavə et</button>
                            @endif

                        </div>
                    </form>
                </div>
                <hr>
                <table class="table">
                    <thead>
                    <tr>
                        <th>Name(AZ)</th>
                        <th>Name(EN)</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                @foreach($categories as $category)
                <tr>
                    <td>{{ $category->name_az }}</td>
                    <td>{{ $category->name_en }}</td>
                    <td>
                        <div class="btn-list flex-nowrap">
                            <button class="btn btn-primary" onclick="window.location.href='{!! route('category.edit',$category->id) !!}'"><i class="fa fa-pen"></i></button>
                            <div class="">
                                <form action="{{ route('category.destroy',$category->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" onclick="return confirm('Silmək istədiyinizdən əminsiniz?')"><i class="fa fa-times"></i></button>
                                </form>
                            </div>
                        </div>


                    </td>
                </tr>
                @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection
