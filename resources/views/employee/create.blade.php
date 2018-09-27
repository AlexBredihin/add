
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
        <form class="form-horizontal" action="{{route('employee.store')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Имя</label>
                <input type="text" name="first_name" class="form-control" id="Name"   >
            </div>
            <div class="form-group">
                <label for="name">Фамилия</label>
                <input type="text" name="last_name" class="form-control" id="Name"   >
            </div>
            <div class="form-group">
                <label for="Email1">Email</label>
                <input type="email" name="email" class="form-control" id="Email1" >
            </div>
            <div class="form-group">
                <label for="phone">Телефон</label>
                <input type="text" name="phone" class="form-control" id="phone" >
            </div>
            <div class="form-group">
                <label for="phone">Компании</label>
                <select  class="form-control" name="company_id">
                    @foreach($companies as $key => $companie)
                        <option value="{{$key}}">{{$companie}}</option>
                    @endforeach
                </select>
            </div>




            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection