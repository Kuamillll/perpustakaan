<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ url('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font.css">
</head>
<body data-bs-theme="dark">
    <header class="p-3 mb-3 border-bottom bg-dark shadow sticky-top">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="{{ url('/') }}" class="nav-link px-2 link-secondary text-white">Home</a></li>
                    <li><a href="{{ url('data') }}" class="nav-link px-2 link-body-emphasis">Data</a></li>
                </ul>
                <ul class="nav col-12 col-lg-auto mb-4 mb-lg-0 me-lg-4">
                    <li><img src="{{ url('images/moon.png') }}" id="icon"></li>
                </ul>
                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                    <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                </form>
                <ul class="nav col-12 col-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="{{ url('login') }}" class="nav-link px-2 link-body-emphasis text-white">Login</a></li>
                </ul>
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