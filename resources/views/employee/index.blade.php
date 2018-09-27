@extends('layouts.app')

@section('content')
    <div>
        <a href="{{route('employee.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus-square-o"></i> Создать сотрудника</a>
        <table class="table table-striped">
            <thead>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>E-mail</th>
            <th>Компания</th>
            <th class="text-right">Действие</th>
            </thead>
            <tbody>
            @forelse ($employees as $employee)
                <tr>
                    <td>{{$employee->first_name}}</td>
                    <td>{{$employee->last_name}}</td>
                    <td>{{$employee->email}}</td>
                    <td>{{$employee->company->name}}</td>
                    <td style="display: flex; flex-direction: ">
                        <a href="{{route('employee.edit', ['id'=>$employee->id])}}"><i class="fa fa-edit"></i></a>
                        <a href="{{route('employee.show', ['id'=>$employee->id])}}"><i class="fa fa-eye"></i></a>
                        <form action="{{route('employee.destroy', ['id'=>$employee->id])}}" method="POST">
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
    {{ $employees->links() }}
@endsection