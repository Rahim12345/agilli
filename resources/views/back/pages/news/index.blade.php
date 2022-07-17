@extends('back.layout.master')

@section('title') News @endsection

@section('css')

@endsection

@section('content')
    <div class="content" style="margin-bottom: 100px">
        <div class="mb-3 col-md-12">
            <div class="content">
                <div class="row">
                    <a href="{{ route('news.create') }}" class="btn btn-primary">Yeni</a>
                </div>
                <div class="mb-3">
                    <table class="table">
                        <tr>
                            <td>Cover</td>
                            <td>Title(AZ)</td>
                            <td>Action</td>
                        </tr>
                        @foreach($news as $new)
                            <tr>
                                <td><img src="{{ asset('files/news-banner/'.$new->cover) }}" style="width: 100px" alt=""></td>
                                <td>{{ $new->title_az }}</td>
                                <td>
                                    <div class="btn-list flex-nowrap">
                                        <button class="btn btn-primary" onclick="window.location.href='{!! route('news.edit',$new->id) !!}'"><i class="fa fa-pen"></i></button>
                                        <div class="">
                                            <form action="{{ route('news.destroy',$new->id) }}" method="POST">
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
    </div>
@endsection

@section('js')

@endsection
