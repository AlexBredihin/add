
@extends('layouts.app')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger alerts col-md-6">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="col-md-8 company">
        <form class="form-horizontal" action="{{route('company.update',['id'=>$company->id])}}" method="post" enctype="multipart/form-data">
            {{ method_field('PUT') }}
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="Name" value="{{$company->name}}">
            </div>
            <div class="form-group">
                <label for="Email1">Email</label>
                <input type="email" name="email" class="form-control" id="Email1" value="{{$company->email}}" >
            </div>
            <div class="form-group">
                <label for="File">File input</label>
                <input name="logo" type="file" class="form-control-file" id="File">
            </div>
            <div class="form-group">
                <label for="site">WebSite</label>
                <input type="text" name="website" class="form-control" id="site" value="{{$company->website}}">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection