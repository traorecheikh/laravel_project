@extends('components.navbar')
@section('content')

    <div>
        @if(session('success'))
            <div class="alert alert-succes">
                {{session('success')}}
            </div>
        @endif
    </div>
    <!-- Login Form -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h3 class="text-center">Login</h3>
                <form method="POST">
                    @csrf
                    <!-- Email Field -->
                    <div class="mb-3">
                        <label for="loginUsername" class="form-label">Username</label>
                        <input type="text" id="username" class="form-control"  name="username" id="loginUsername" placeholder="Enter your username" required>
                    </div>

                    <!-- Password Field -->
                    <div class="mb-3">
                        <label for="loginPassword" class="form-label">Password</label>
                        <input type="password" id="password" name="password" class="form-control" id="loginPassword" placeholder="Enter your password" required>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary w-100">Login</button>
                </form>

                <div class="mt-3 text-center">
                    <p>Don't have an account? <a href="{{route('register')}}">Register here</a></p>
                </div>
            </div>
        </div>
    </div>

@endsection
