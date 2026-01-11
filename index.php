<?php
include "koneksi.php";
$halaman = isset($_GET['halaman']) ? $_GET['halaman'] : 'home';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Daily Journal</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        body { background-color: #e0f2fe; transition: all 0.3s ease; }
        .dark-mode { background-color: #0c4a6e; color: white; }
        .nav-custom { background: rgba(255, 255, 255, 0.7); backdrop-filter: blur(15px); border-bottom: 1px solid rgba(255, 255, 255, 0.3); }
    </style>
</head>
<body>
    <nav class="nav-custom sticky top-0 z-50 p-4">
        <div class="max-w-7xl mx-auto flex justify-between items-center px-6">
            <div class="font-bold text-xl text-sky-900">My Daily Journal</div>
            <div class="flex items-center gap-6">
                <a href="index.php?halaman=home" class="text-sky-800 font-bold">Home</a>
                <a href="index.php?halaman=gallery" class="text-sky-800 font-bold">Gallery</a>
                <a href="index.php?halaman=aboutme" class="text-sky-800 font-bold">About</a>
                <a href="index.php?halaman=kontak" class="text-sky-800 font-bold">Contact</a>
                <a href="login.php" class="bg-sky-600 text-white px-4 py-1 rounded-full text-sm">Login</a>
                <button onclick="toggleDarkMode()" class="text-xl" id="darkModeIcon">🌙</button>
            </div>
        </div>
    </nav>

    <div id="content">
        <?php
        $file = $halaman . ".php";
        if (file_exists($file)) {
            include $file;
        } else {
            echo "<div class='container mt-5'><h1>Halaman Tidak Ditemukan!</h1></div>";
        }
        ?>
    </div>

    <script>
        function toggleDarkMode() {
            document.body.classList.toggle('dark-mode');
            const isDark = document.body.classList.contains('dark-mode');
            document.getElementById('darkModeIcon').textContent = isDark ? '☀️' : '🌙';
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>