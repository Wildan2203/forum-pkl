@extends('temp-login')

@section('judul_halaman', 'Forum Discussion | Login')

@section('konten')
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Selamat Datang kembali!</h1>
                                </div>
                                @if(session('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ session('success') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @endif
                                <form action="login" class="user" method="post" >
                                    @csrf
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user
                                        @error('email') is-invalid @enderror" id="email"
                                                name="email" placeholder="name@example.com" >
                                            @error('email')
                                            <div class="invalid-feedback">
                                                tidak valid
                                            </div>
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user
                                        @error('password') is-invalid @enderror" id="password" name="password" placeholder="password">
                                            @error('password')
                                            <div class="invalid-feedback">
                                                tidak valid
                                            </div>
                                            @enderror
                                    </div>
                                    <input type="submit" class="btn btn-primary btn-user btn-block"
                                        value="Login">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


