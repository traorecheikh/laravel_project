@extends('components.navbar-admin')
@section('content')

    <!-- Main Content -->
    <div class="col-md-9 p-4">
        <h2>Welcome, Admin</h2>
        <p>Here's an overview of your system.</p>
        <div class="row">
            <div class="col-md-6">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Total Books</h5>
                        <p class="card-text">{{$TotalBooks}} Books in the system</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card text-white bg-success mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Total Users</h5>
                        <p class="card-text">{{$TotalUsers}} Active Users</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
