@extends('layouts.app')

@section('content')
    <div>
        <table class="table table-striped">
            <thead>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>E-mail</th>
            <th>Компания</th>

            </thead>
            <tbody>
                <tr>
                    <td>{{$employee->first_name}}</td>
                    <td>{{$employee->last_name}}</td>
                    <td>{{$employee->email}}</td>
                    <td>{{$employee->company->name}}</td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection