<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        /* CSS untuk tata letak dan desain */
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }
        #sidebar {
            width: 250px;
            background-color: #343a40;
            color: #fff;
            position: fixed;
            left: 0;
            top: 0;
            height: 100%;
            overflow-y: auto;
            transition: width 0.3s;
            z-index: 1;
        }
        #content {
            padding: 20px;
            margin-left: 250px;
            transition: margin-left 0.3s;
        }
        .menu-item {
            padding: 15px 20px;
            border-bottom: 1px solid #495057;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .menu-item:last-child {
            border-bottom: none;
        }
        .menu-item:hover {
            background-color: #495057;
        }
        .menu-icon {
            margin-right: 10px;
        }
        .profile {
            position: fixed;
            top: 0;
            right: 0;
            padding: 10px;
            background-color: #343a40;
            color: #fff;
            cursor: pointer;
            z-index: 1;
            transition: background-color 0.3s;
        }
        .profile:hover {
            background-color: #495057;
        }
        .toggle-btn {
            background-color: transparent;
            border: none;
            color: #fff;
            position: fixed;
            top: 20px;
            left: 20px;
            font-size: 24px;
            cursor: pointer;
            z-index: 1;
        }
        @media (max-width: 768px) {
            #sidebar {
                width: 0;
            }
            #content {
                margin-left: 0;
            }
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div id="sidebar">
    <div class="profile">
        <i class="fas fa-user"></i> Profile
    </div>
    <div class="menu-item">
        <i class="fas fa-home menu-icon"></i> Home Dashboard
    </div>
    <div class="menu-item">
        <i class="fas fa-users menu-icon"></i> Tabel Pegawai
    </div>
    <div class="menu-item">
        <i class="fas fa-book menu-icon"></i> Tabel Buku
    </div>
    <div class="menu-item">
        <i class="fas fa-address-book menu-icon"></i> Tabel Pelanggan
    </div>
    <div class="menu-item">
        <i class="fas fa-file-alt menu-icon"></i> Laporan Peminjaman Buku
    </div>
    <div class="menu-item">
        <i class="fas fa-phone menu-icon"></i> Contact
    </div>
    <div class="menu-item">
        <i class="fas fa-sign-out-alt menu-icon"></i> Logout
    </div>
</div>

<div id="content">
    <div class="container">
        <div class="row">
            <div class="col">
                <!-- Konten akan dimuat di sini -->
                <h1 class="mt-3">Welcome to the Dashboard</h1>
                <p>This is the content area. You can put your content here.</p>
            </div>
        </div>
    </div>
</div>

<script>
    function toggleSidebar() {
        var sidebar = document.getElementById('sidebar');
        if (sidebar.style.width === '250px') {
            sidebar.style.width = '0';
            document.getElementById('content').style.marginLeft = '0';
        } else {
            sidebar.style.width = '250px';
            document.getElementById('content').style.marginLeft = '250px';
        }
    }
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

</body>
</html>
