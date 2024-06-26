@extends('layouts.auth')
@section('auth')

<div class="container">


    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-5 col-lg-4 col-md-6">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="text-left mt-3 ml-3">
                        <a href="{{ asset('landing')}}" class="btn btn-secondary">
                            <i class="bi bi-arrow-left-circle-fill"></i>
                        </a>
                    </div>
                    <div class="row">
                        {{-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> --}}
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Please Login </h1>
                                </div>
                                <form class="" method="POST" action="{{ asset('login') }}" autocomplete="off">
                                    @csrf
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control form-control-user" id="username" aria-describedby="emailHelp" name="username" placeholder="Enter Your Username...">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control form-control-user" name="password" id="password" placeholder="Password">
                                        <label for="" style="font-size: 14.7px">
                                            <i class="fas fa-eye mt-2 text-muted" id="toggle" style="margin-left: 5px; cursor: pointer;"></i>
                                            Show Password
                                        </label>
                                    </div>
                                    <button type="submit" class="btn btn-dark btn-user btn-block">Login</button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    Not Registered?<a class="small" href="{{ asset('register') }}">Create an Account!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

<script>
    const toggle = document.querySelector('#toggle')
    const password = document.querySelector('#password')

    toggle.addEventListener('click', function(e) {
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password'
        password.setAttribute('type', type)

        this.classList.toggle('fa-eye-slash');
    })
</script>
@endsection