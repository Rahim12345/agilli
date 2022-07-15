@extends('back.layout.master')

@section('title') Projects @endsection

@section('css')

@endsection

@section('content')
    <div class="content" style="margin-bottom: 100px">
        <div class="mb-3 col-md-12">
            <div class="content">
                <div class="mb-3">
                    <a href="{{ route('project.create') }}" class="btn btn-primary w-100">All</a>
                    <table class="table">
                        <tr>
                            <td>Cover</td>
                            <td>Title(AZ)</td>
                            <td>Action</td>
                        </tr>
                        @foreach($projects as $project)
                            <tr>
                                <td>{{ $project->title_az }}</td>
                                <td>{{ $project->title_az }}</td>
                                <td>
                                    <div class="btn-list flex-nowrap">
                                        <button class="btn btn-primary" onclick="window.location.href='{!! route('project.edit',$project->id) !!}'"><i class="fa fa-pen"></i></button>
                                        <div class="">
                                            <form action="{{ route('project.destroy',$project->id) }}" method="POST">
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
