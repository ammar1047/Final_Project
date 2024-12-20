<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>OTO TRACK</title>
    <link rel="icon" type="image/png" href="img/oto track.png" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">
            <img src="img/Logo_Web-removebg-preview.png" alt="Logo" class="logo" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about/about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="user/search.php">Search</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="faq/faq.php">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about/contact.php">Contact</a>
                </li>
            </ul>
            <div class="login-container">
                <a href="auth/login.php" class="btn btn-outline-primary" id="loginButton">Login</a>
                <div id="userContainer" style="display: none;" class="ml-2">
                    <div class="profile-icon" id="profileIcon"></div>
                    <span id="username" style="cursor: pointer;"></span>
                    <a href="#" class="btn btn-danger btn-sm logout-button" id="logoutButton">Logout</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Body -->
    <div class="image-container">
        <img src="img/mobil jajar.jpg" alt="Deskripsi Proyek" class="img-fluid" />
        <div class="centered-content">
            <h5>
                Selamat datang di Oto Track, penyedia solusi transportasi terdepan Anda. Berkomitmen untuk menyediakan pilihan kendaraan yang lengkap dan layanan berkualitas, Oto Track adalah mitra tepercaya untuk semua kebutuhan sewa mobil Anda, baik untuk keperluan
                pribadi, bisnis, maupun acara khusus.
            </h5>
            <a href="#produk" class="product-button">Daftar Produk Kami</a>
        </div>
    </div>

    <!-- Daftar produk -->
    <div id="produk" class="product-list">
        <h2>Daftar Produk Kami</h2>
        <div class="product-container">
            <div class="product-item">
                <img src="img/avanza.webp" alt="Mobil 1" class="product-image" />
                <h3>Avanza</h3>
                <h5>•12 jam: Rp 300.000</h5>
                <h5>•24 jam: Rp 400.000</h5>
            </div>
            <div class="product-item">
                <img src="img/Brio Matic.webp" alt="Mobil 2" class="product-image" />
                <h3>Brio Matic</h3>
                <h5>•12 jam: Rp 250.000</h5>
                <h5>•24 jam: Rp 350.000</h5>
            </div>
            <div class=" product-item">
                <img src="img/New Agya Matic.webp" alt="Mobil 3" class="product-image" />
                <h3>New Agya Matic</h3>
                <h5>•12 jam: Rp 300.000</h5>
                <h5>•24 jam: Rp 400.000</h5>
            </div>
            <div class="product-item">
                <img src="img/Calya Manual.webp" alt="Mobil 4" class="product-image" />
                <h3>Calya Manual</h3>
                <h5>•12 jam: Rp 300.000</h5>
                <h5>•24 jam: Rp 400.000</h5>
            </div>
            <div class="product-item">
                <img src="img/Wuling Almaz Matic.webp" alt="Mobil 5" class="product-image" />
                <h3>Wuling Almaz Matic</h3>
                <h5>•12 jam: Rp 450.000</h5>
                <h5>•24 jam: Rp 600.000</h5>
            </div>
            <div class="product-item">
                <img src="img/Grandmax.webp" alt="Mobil 6" class="product-image" />
                <h3>Grandmax</h3>
                <h5>•12 jam: Rp 200.000</h5>
                <h5>•24 jam: Rp 300.000</h5>
            </div>
        </div>
    </div>

    <p>&copy; 2023 OTO TRACK. All Rights Reserved.</p>

    <!-- Footer -->
    <footer id="foot">
    <?php include '../footer.php'; ?>
    </footer>
    <script>
        // Menampilkan nama pengguna jika sudah login
        const usernameDisplay = document.getElementById('username');
        const profileIcon = document.getElementById('profileIcon');
        const storedUsername = localStorage.getItem('username');

        if (storedUsername) {
            const firstLetter = storedUsername.charAt(0).toUpperCase();
            profileIcon.textContent = firstLetter; // Tampilkan huruf depan
            usernameDisplay.textContent = storedUsername; // Tampilkan nama pengguna
            document.getElementById('userContainer').style.display = 'flex'; // Tampilkan kontainer pengguna
            document.getElementById('loginButton').style.display = 'none'; // Sembunyikan tombol login
        }

        // Fungsi untuk logout dengan konfirmasi
        document.getElementById('logoutButton').addEventListener('click', function() {
            const confirmLogout = confirm("Apa anda ingin log out?");
            if (confirmLogout) {
                localStorage.removeItem('username'); // Hapus username dari local storage
                usernameDisplay.style.display = 'none'; // Sembunyikan nama pengguna
                profileIcon.textContent = ''; // Hapus huruf depan
                document.getElementById('loginButton').style.display = 'inline'; // Tampilkan tombol login
                document.getElementById('logoutButton').style.display = 'none'; // Sembunyikan tombol logout
            }
        });
    </script>
</body>

</html>