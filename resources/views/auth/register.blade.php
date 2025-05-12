@extends('layouts.app')

@section('title') Register @endsection

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card shadow-sm">
          <div class="card-body">
            <h2 class="card-title text-center mb-4">Register</h2>

            <form method="POST" action="{{route('register')}}" class="row g-3 mb-4">
                @csrf

              <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
              </div>

              <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" required>
              </div>

              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
              </div>

              <div class="mb-3">
                <label for="confirm-password" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="confirm-password" name="password_confirmation" required>
              </div>

              <div class="d-grid">
                <button type="submit" class="btn btn-primary">Register</button>
              </div>

            </form>
            <p class="text-center mt-3">Already have an account? <a href="{{route('login')}}">Login here</a>.</p>
          </div>
        </div>
      </div>
    </div>


@endsection
