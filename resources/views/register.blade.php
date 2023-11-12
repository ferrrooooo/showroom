@extends('layout.app')
@section('content')
@if (session()->has('message'))
<script>
    Swal.fire("'".session("message")."'")
</script>
@endif
<div class="container d-flex justify-content-center align-items-center w-100" style="min-height: 100vh;">
<form method="POST" action="{{ route('registerPost') }}" class="w-100 p-5">
    @csrf
    @method('post')
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name">
        @error('name')
            <div class="invalid-feedback mb-3">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" name="email">
        @error('email')
            <div class="invalid-feedback mb-3">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password">
        @error('password')
            <div class="invalid-feedback mb-3">
                {{ $message }}
            </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary w-100">Submit</button>
</form>
</div>
@endsection
