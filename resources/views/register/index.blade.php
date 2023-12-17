@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
  <div class="col-lg-5">
    <main class="form-registration">
      <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
      <form action="/register" method="post">
        @csrf
         <div class="form-floating">
          <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
          <label for="name">Name</label>
          @error('name')
          <div id="validationServerUsernameFeedback" class="invalid-feedback">
            {{ $message }}
          </div>
              
          @enderror
        </div>

         <div class="form-floating">
          <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
          <label for="username">Username</label>
          @error('username')
          <div id="validationServerUsernameFeedback" class="invalid-feedback">
            {{ $message }}
          </div>
              
          @enderror
        </div>

        <div class="form-floating">
          <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
          <label for="email">Email</label>
          @error('email')
          <div id="validationServerUsernameFeedback" class="invalid-feedback">
            {{ $message }}
          </div>
              
          @enderror
        </div>

        <div class="form-floating">
          <input type="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" required>
          <label for="password">Password</label>
          @error('password')
          <div id="validationServerUsernameFeedback" class="invalid-feedback">
            {{ $message }}
          </div>  
          @enderror

        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
      </form>

      <small class="text-center d-block mt-3">Already Registed?<a href="/login">Login</a> </small>
    </main>
  </div>
</div>


@endsection