@extends('parent.master')
@section('content')
<body>
    <h1>hello world</h1>

    @if(session()->has('message'))

    <p>{{session()->get('message')}}</p>

    @endif

    <a href="{{route('create.user')}}" class="btn btn-primary">new add</a>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($testers as $tester)
<tr>
  <th scope="row">{{$loop->iteration}}</th>
  <td>{{$tester->name}}</td>
  <td>{{$tester->email}}</td>
  <td>{{$tester->phone_number}}</td>
  <td>
    <a href="{{ route('edit.user', $tester->id) }}" class="btn btn-primary">Edit</a>
    <a href="{{ route('delete.user', $tester->id) }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
  </td>
</tr>
@endforeach
  </tbody>
</table>


</body>
</html>
@endsection('content')