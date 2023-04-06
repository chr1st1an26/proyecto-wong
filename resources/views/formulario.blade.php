@extends('layout.layouts')
@section('titulo')
    FORMULARIO
@endsection
@section('contenido')
<form action="/formulario" method="POST">
    @csrf
    <!-- 2 column grid layout with text inputs for the first and last names -->
    <!-- Username input -->
    <div class="row mb-4">
      <div class="col">
        <div class="form-outline">
          <input type="text" id="name" name="name" class="form-control" />
          <label class="form-label" for="name">Full name</label>
        </div>
        @error('name')
        <p style="color: red">{{$message}}</p>
        @enderror
      </div>
    </div>
  
    <!-- Username input -->
    <div class="form-outline mb-4">
      <input type="text" name="username" id="form6Example3" class="form-control" />
      <label class="form-label" for="username">Username</label>
    </div>
    @error('username')
    <p style="color: red">{{$message}}</p>
    @enderror
    <!-- Email input -->
    <div class="form-outline mb-4">
      <input type="text" name="email" id="email" class="form-control" />
      <label class="form-label" for="email">Email</label>
    </div>
    @error('email')
    <p style="color: red">{{$message}}</p>
    @enderror
    <!-- Password input -->
    <div class="form-outline mb-4">
      <input type="password" name="password" id="password" class="form-control" />
      <label class="form-label" for="password">Password</label>
    </div>
    @error('password')
    <p style="color: red">{{$message}}</p>
    @enderror
    <div class="form-outline mb-4">
      <input type="password" name="password_confirmation" id="password" class="form-control" />
      <label class="form-label" for="password_confirmation">Confirmation Password</label>
    </div>
    <!-- Checkbox -->
    <div class="form-check d-flex justify-content-center mb-4">
      <input class="form-check-input me-2" type="checkbox" value="" id="form6Example8" checked />
      <label class="form-check-label" for="form6Example8"> Create an account? </label>
    </div>
    @error('form6Example8')
    <p style="color: red">{{$message}}</p>
    @enderror
    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4">Place order</button>
  </form>

  @endsection