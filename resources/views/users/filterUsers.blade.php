@extends('layouts.app')

@section('content')

    <div class="container flex justify-content-center mt-5">
        <a href="{{ route('users.all') }}" class="btn btn-success">All Users</a>
        <div class="row">

            <table class="table mt-3">
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
                    @if ($userCount > 0)
                    @foreach ($users as $key => $user)
                        

                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->dob }}</td>
                            <td>{{ $user->age }}</td>
                            <td>{{ $user->address }}</td>
                        </tr>

                    @endforeach

                    @else
                        <tr>
                            <td>No users found</td>
                        </tr>
                        @endif
                </tbody>
            </table>
        </div>
    </div>


@endsection
