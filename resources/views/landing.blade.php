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
 <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
        <div class="container px-5 px-lg-5">
            <a class="navbar-brand text-light fs-5 fw-bold" href="#">E-Library</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active text-light" aria-current="page" href="#!">Home</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="#!">Rekomendasi</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="#!">Tentang Kami</a></li>
                </ul>
                <li class="nav-item ">
                    <a class="nav-links text-light" href="{{ url('login')}}">
                        <i class="bi bi-box-arrow-in-right"></i>
                        Login</a>
                </li>
            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class="bg-dark py-5 mt-5">
        <div class="container px-4 px-lg-5 my-5 mt-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">E-Library Indonesia</h1>
                <p class="lead fw-normal text-white-50 mb-0">Solusi Perpustakaan Digital</p>
            </div>
        </div>
    </header>
     <section id="hero" class="d-flex align-item-center">
         <div class="container">
             <div class="row">
                 <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1">
                     <!-- <h1 class="text-black">solusi tepat untuk meminjam buku</h1>
                     <h2 class="text-dark">Aplikasi Kami Terpercaya untuk Memudahkan anda Mencari,Membaca Buku Yang Anda Butuhkan</h2> -->
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