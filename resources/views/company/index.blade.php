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
        <th class="text-right">Действие</th>
        </thead>
        <tbody>
        @forelse ($companies as $company)
            <tr>
                <td>{{$company->name}}</td>
                <td>{{$company->email}}</td>
                <td>{{$company->website}}</td>
                <td><img src="<?php echo asset("storage/$company->logo")?>" height="30px" width="30px" /></td>
                <td style="display: flex; flex-direction: ">
                    <a href="{{route('company.edit', ['id'=>$company->id])}}"><i class="fa fa-edit"></i></a>
                    <a href="{{route('company.show', ['id'=>$company->id])}}"><i class="fa fa-eye"></i></a>
                    <form action="{{route('company.destroy', ['id'=>$company->id])}}" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button  class="btn btn-link fa fa-trash" style="padding: 0"></button>
                    </form>

                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5" class="text-center"><h2>Данные отсутствуют</h2></td>
            </tr>
        @endforelse
        </tbody>
    </table>
    </div>
    {{ $companies->links() }}
@endsection