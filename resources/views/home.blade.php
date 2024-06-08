@extends('layout')

@section('title')
All User Data
@endsection

@section('content')
    <a class="btn btn-success btn-sm mb-2 mt-2" href="{{ route('user.create') }}">Add New User</a>
<table class=" table table-striped table-bordered">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>City</th>
            <th>View</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>
    </thead>
    @foreach ($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->age}}</td>
            <td>{{$user->city}}</td>
            <td>
                <a class="btn btn-primary btn-sm" href="{{ route('user.show', $user->id) }}">View</a>
            </td>
            <td>
                <form action="{{route('user.destroy', $user->id)}}" method="POST">
                    @csrf
                @method('delete')
                <button class="btn btn-danger btn-sm" type="submit">Delete</button>
            </form>
            </td>
            <td>
                <a class="btn btn-warning btn-sm" href="{{ route('user.edit', $user->id) }}">Update</a>
            </td>
        </tr>
    @endforeach
</table>
<div class="col-6">
    {{$users->links()}}
</div>
@endsection