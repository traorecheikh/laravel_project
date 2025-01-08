
@extends('components.navbar')
<!-- Register Form -->
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h3 class="text-center">Register</h3>
            <form method="POST">
                @csrf
                <!-- Username Field -->
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Enter your username" required>
                </div>

                <!-- First Name Field -->
                <div class="mb-3">
                    <label for="fname" class="form-label">First Name</label>
                    <input type="text" class="form-control" name="fname" placeholder="Enter your first name" required>
                </div>

                <!-- Last Name Field -->
                <div class="mb-3">
                    <label for="lname" class="form-label">Last Name</label>
                    <input type="text" class="form-control" name="lname" placeholder="Enter your last name" required>
                </div>

                <!-- Password Field -->
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter your password" required>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary w-100">Register</button>
            </form>

            <div class="mt-3 text-center">
                <p>Already have an account? <a href="{{route('login')}}">Login here</a></p>
            </div>
        </div>
    </div>
</div>
@endsection
