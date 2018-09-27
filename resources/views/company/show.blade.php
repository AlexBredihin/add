@extends('layouts.app')

@section('content')
<div>
    <a href="{{route('company.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus-square-o"></i> Создать категорию</a>
    <table class="table table-striped">
        <thead>
        <th>Name</th>
        <th>Email</th>
        <th>WebSite</th>
        <th>Image</th>

        </thead>
        <tbody>
        <tr>
            <td>{{$company->name}}</td>
            <td>{{$company->email}}</td>
            <td>{{$company->website}}</td>
            <td><img src="<?php echo asset("storage/$company->logo")?>" height="30px" width="30px" /></td>
        </tr>
        </tbody>
    </table>
</div>

@endsection