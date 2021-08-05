@extends('layouts.app')

@section('content')

<div class="container flex justify-content-center mt-5">
    <div class="row">
        <form action="{{ route('users.filter')}}" method="POST">
            @csrf
        <div class="form-group">
            <input type="date" class="" name="date">
            <button type="submit" class="btn btn-primary">filter by date</button>
        </div>
    </form>
    <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">E-mail</th>
          <th scope="col">Date of Birth</th>
          <th scope="col">Age</th>
          <th scope="col">Address</th>
        </tr>
      </thead>
      <tbody>
          @foreach (App\User::all() as $key=>$users)
              
        <tr>
          <th scope="row">{{ $key+1 }}</th>
          <td>{{ $users->name }}</td>
          <td>{{ $users->email }}</td>
          <td>{{ $users->dob}}</td>
          <td>{{ $users->age }}</td>
          <td>{{ $users->address }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
</div>
</div>


@endsection
