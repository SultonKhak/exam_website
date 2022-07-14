@extends('Master')
@section('title','Home')
@section('content')

<table class="table table-striped" style="margin-top: 30px">
    <thead class="thead-dark">
      <tr>
        <th scope="col">User ID</th>
        <th scope="col">Username</th>
        <th scope="col">E-mail</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    @foreach($users as $user)
    <tbody>
      <tr>
        <th scope="row"><p>{{$user->id}}</p></th>
        <td><p><a href="#">{{$user->name}}</a></p></td>
        <td><p>{{$user->email}}</p></td>
        <td>
            <form action="/homepage/profile/{{$user->id}}" method="post">
                @method('DELETE')
                @csrf
                <button class="btn btn-outline-danger">Delete</button>
            </form>
        </td>
      </tr>
      
    </tbody>
    @endforeach
  </table>

@endsection