@extends('layout')

@section('title')
    Add New User
@endsection

@section('content')
<form action="{{route('user.store')}}" method="POST">
  @csrf
    <div class="form-group">
      <label for="username" class="form-lable">User Name</label>
      <input type="text" class="form-control" name="username" placeholder="Enter Username">
    </div>
    <div class="form-group">
      <label for="email" class="form-lable">User Email</label>
      <input type="email" class="form-control" name="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="age" class="form-lable">User Age</label>
      <input type="number" class="form-control" name="age" placeholder="Enter Age">
    </div>
    <div class="form-group">
      <label for="city" class="form-lable">User City</label>
      <input type="text" class="form-control" name="city" placeholder="Enter city">
    </div>
    
    <button type="submit" class="btn btn-success m-2 btn-sm">Submit</button>
  </form>
@endsection