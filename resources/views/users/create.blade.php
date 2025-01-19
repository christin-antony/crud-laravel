@extends('parent.master')
@section('content')
<form action="{{ route('save.user') }}" method="post">
@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" placeholder="Enter name">
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="email" class="form-control" name="email" id="exampleInputPassword1" placeholder="Enter Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Phone Number</label>
    <input type="number" class="form-control" name="phone_number" id="exampleInputPassword1" placeholder="Enter EPhone Number">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection('content')