 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>E-Library</title>
     <link rel="shortcut icon" href="{{ url('images/icon.png') }}" type="image/x-icon">
     <link href="{{ url('asset/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
     <link href="{{ url('asset/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
     <link href="{{ url('asset/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
     <link href="{{ url('asset/vendor/quill/quill.snow.css') }}" rel="stylesheet">
     <link href="{{ url('asset/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
     <link href="{{ url('asset/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
     <link href="{{ url('asset/vendor/simple-datatables/style.css') }}" rel="stylesheet">
     <link href="{{ url('asset/vendor/aos/aos.css') }}" rel="stylesheet">
     <link href="{{ url('asset/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
     <link href="{{ url('asset/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
     <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="css/font.css">
 </head>

 <body>
     <header id="header" class="p-3 mb-4 bg-dark fixed-top">
         <div class="container d-flex align-item-center">
             <ul class="nav col-12 col-lg-auto mb-4 mb-lg-0 me-lg-4 sign-buttons">
                 <li class="nav-item me-auto"><a href="{{ asset('/') }}" class="nav-link px-2 link-secondary text-white fs-5 fw-bold">E-Library</a></li>
             </ul>
             <div class="clock">
                 <div id="day"></div>
                 <div id="date"></div>
             </div>
             <nav id="navbar" class="navbar">
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
                 <ul class="nav col-12 col-lg-auto mb-2 justify-content-center mb-md-0 sign-buttons">
                     <li><a href="{{ url('register') }}" class="nav-link px-2 link-body-emphasi">Sign up</a></li>
                 </ul>
             </nav>
         </div>
     </header>
     <section id="hero" class="d-flex align-item-center">
         <div class="container">
             <div class="row">
                 <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1">
                     <!-- <h1 class="text-black">solusi tepat untuk meminjam buku</h1>
                     <h2 class="text-dark">Aplikasi Kami Terpercaya untuk Memudahkan anda Meminjam Buku</h2> -->
                 </div>
                 <div class="col-lg-6 order-1 order-lg-2 hero-img">
                     <img src="/public/images/image1.jpg" class="img-fluid" alt="">
                 </div>
             </div>
         </div>
     </section>
     <script>
         var icon = document.getElementById("icon");
         icon.onclick = function() {
             document.body.classList.toggle("dark-theme");
             if (document.body.classList.contains("dark-theme")) {
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