@extends('parent.master')
@section('content')
<form action="{{ route('update.user', $tester->id) }}" method="post">
@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="{{ $tester->name }}" placeholder="Enter name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="email" class="form-control" name="email" value="{{ $tester->email }}" placeholder="Enter Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Phone Number</label>
    <input type="number" class="form-control" name="phone_number" value="{{ $tester->phone_number }}" placeholder="Enter Phone Number">
  </div>
 
  <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection('content')