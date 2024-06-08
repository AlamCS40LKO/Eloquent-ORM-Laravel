@extends('layout')

@section('title')

User Details

@endsection

@section('content')

<table class=" table table-striped table-bordered">

        <tr>
            <th width="80px"> Name : </th>
                <td>{{$users->name}}</td>
        </tr>
        <tr>
            <th width="80px"> Email : </th>
                <td>{{$users->email}}</td>
        </tr>
        <tr>
            <th width="80px"> Age : </th>
                <td>{{$users->age}}</td>
        </tr>
        <tr>
            <th width="80px"> City : </th>
                <td>{{$users->city}}</td>
        </tr>
</table>
<a href="{{route('user.index')}}" class="btn btn-danger">Back</a>
@endsection