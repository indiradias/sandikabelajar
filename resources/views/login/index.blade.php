@extends('layouts.main')

@section('container')
<br><br><br>
<div class="row justify-content-center">
    <div class="col-lg-5">

        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if(session()->has('LoginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('LoginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <main class="form-signin">
            <h1 class="h3 mb-3 fw-normal text-center">Mohon Login!</h1>
            <form action="/login" method="post">
                @csrf

              {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}

              {{-- Form Email --}}
              <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email')}}">
                <label for="floatingInput">Email</label>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
              </div>
              {{-- End of Email --}}

              {{-- Form Password --}}
              <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                <label for="floatingPassword">Password</label>
              </div>
              {{-- End of Password --}}


              <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Login</button>
            </form>
            <small class="d-block text-center mt-3">Belum punya akun? <a href="/register">Register sekarang!</a></small>
          </main>
    </div>
</div>

  @endsection
