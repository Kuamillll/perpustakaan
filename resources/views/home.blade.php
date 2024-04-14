 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Library</title>
    <link rel="shortcut icon" href="{{ url('images/icon.png') }}" type="image/x-icon">
    <link href="{{ url('asset/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('asset/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ url('asset/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ url('asset/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ url('asset/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font.css">
</head>
<body data-bs-theme="dark">
    <header class="p-3 mb-4 border-bottom bg-dark shadow sticky-top">
         <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
               <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                  <li class="nav-item"><a href="{{ url('/') }}" class="nav-link px-2 link-secondary text-white fs-5 fw-bold">E-Library</a></li>
               </ul>
               <div class="clock">
                  <div id="day"></div>
                  <div id="date"></div>
               </div>
               <ul class="nav col-12 col-lg-auto mb-4 mb-lg-0 me-lg-4 sign-buttons">
                  <li><img src="{{ url('images/moon.png') }}" id="icon"></li>
               </ul>
               <ul class="nav col-12 col-lg-auto mb-2 justify-content-center mb-md-0 sign-buttons">
                  <li><a href="{{ url('login') }}" class="nav-link px-2 link-body-emphasis">
                    <i class="bi bi-box-arrow-in-right fs-6"></i>
                     &nbsp;
                     <span>Sign in</span>
                    </a>
                  </li>
               </ul>
                <!-- <ul class="nav col-12 col-lg-auto mb-3 justify-content-center mb-md-1 sign-buttons">
                    <li><a href="{{ url('register') }}" class="nav-link px-2 link-body-emphasi">Sign up</a></li>
                </ul> -->
            </div>
         </div>
    </header>
    <div class="jumbotron-fluid header-jumbotron hero-header jumbotron ">
            <div class="container px-lg-5">
                <div class="row g-5 align-items-end">
                    <div class="col-lg-6 text-center text-lg-start">
                        <h1 class=" mb-4 animated slideInDown text-white"></h1>
                        <div class="card bg-transparent">
                            <strong class="text-white">
                              </strong>
                        </div>
                    </div>
                </div>
            </div>
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
        
        function updateTime() {
            var now = new Date();
            var days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
            var day = days[now.getDay()];
            var date = now.getDate();
            var month = now.getMonth() + 1;
            var year = now.getFullYear();
            var hours = now.getHours();
            var minutes = now.getMinutes();
            var seconds = now.getSeconds();

            // Tambahkan nol di depan angka jika hanya satu digit
            month = month < 10 ? '0' + month : month;
            date = date < 10 ? '0' + date : date;
            hours = hours < 10 ? '0' + hours : hours;
            minutes = minutes < 10 ? '0' + minutes : minutes;

            var dayString = day + ',' + hours + ':' + minutes;
            // var timeString = hours + ':' + minutes;
            var dateString = date + ',' + month + ',' + year;

            document.getElementById('day').textContent = dayString;
            document.getElementById('date').textContent = dateString;
        }

        // Perbarui waktu setiap detik
        setInterval(updateTime, 1000);

        // Panggil fungsi pertama kali untuk menampilkan waktu awal
        updateTime();

    </script>
</body>
</html>