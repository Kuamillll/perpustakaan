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

        var backgroundImages = [
        'url(images/image1.jpg)',
        'url(images/image2.jpg)',
        'url(images/image3.jpg)'
    ];

    var currentIndex = 0;
    var backgroundElement = document.getElementById('backgroundImage');

    function changeBackground() {
        currentIndex = (currentIndex + 1) % backgroundImages.length;
        backgroundElement.style.backgroundImage = backgroundImages[currentIndex];
    }

    // Ubah latar belakang setiap 5 detik
    setInterval(changeBackground, 5000);