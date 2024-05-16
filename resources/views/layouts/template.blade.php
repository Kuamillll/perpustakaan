<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>E-Library</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="{{ url('asset/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('styleuser') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="{{ url('css/style.css') }}"> -->
    <link rel="stylesheet" href="{{ url('css/font.css') }}">
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
        <div class="container px-5 px-lg-5">
            <a class="navbar-brand text-light fs-5 fw-bold" href="#">E-Library</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active text-light" aria-current="page" href="{{ url('/')}}">Home</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="{{ asset ('datauser')}}">Daftar Buku</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="{{ asset ('tentang')}}">Tentang kami</a></li>
                </ul>
                <li class="nav-item dropdown">
                    <a class="nav-links dropdown-toggle text-light" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person me-1"></i>
                        Profile</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">
                                <i class="bi bi-gear"></i>
                                Setting</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                    </ul>
                </li>
            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Shop in style</h1>
                <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>
            </div>
        </div>
    </header>

    <div class="container">
        @yield('content')
    </div>
    <script>

        var icon = document.getElementById("icon");
        icon.onclick = function(){
            document.body.classList.toggle("dark-theme");
            if(document.body.classList.contains("dark-theme")){
                icon.src = "{{ url('images/contrast.png') }}";
            } else {
                icon.src = "{{ url('images/moon.png') }}";
            }
        }

    </script>
</body>
</html>