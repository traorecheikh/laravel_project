@extends('components.navbar-admin')
@section('content')

    <!-- Main Content -->
    <div class="col-md-9 p-4">
        <h2>Manage Users</h2>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Nom Complet</th>
                <th>Username</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <!-- Example of a user row -->
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->fname.' '.$user->lname}}</td>
                    <td>{{$user->username}}</td>
                    <td>{{$user->role}}</td>
                    <td>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
            @endforeach
            <!-- More rows dynamically added -->
            </tbody>
        </table>
    </div>

@endsection
