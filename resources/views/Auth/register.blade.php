@extends('layouts.auth')
@section('auth')

<div class="container py-5">

    <div class="col-xl-6 col-lg-4 col-md-6 mx-auto">
        <div class="card o-hidden border-0 shadow-md ">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="justify-content-center d-flex">
                    {{-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> --}}
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                                @csrf
                            </div>
                            <form action="{{ asset('register') }}" method="POST">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control form-control-user" id="name" name="name"
                                         placeholder="Your Name">
                                </div>
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control form-control-user" id="username" name="username"
                                        placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control form-control-user" id="email" name="email"
                                        placeholder="Email Address">
                                </div>
                                <div class="form-group ">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control form-control-user"
                                        id="password" placeholder="Password" name="password">
                                    <label for="" style="font-size: 14.7px">
                                        <i class="fas fa-eye mt-2 text-muted" id="toggle" style="margin-left: 5px; cursor: pointer;"></i>
                                        Show Password
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-secondary btn-user btn-block">Register Account</button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="{{ asset('login') }}">Already have an account? Login!</a>
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