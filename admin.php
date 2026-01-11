<?php
session_start();
include "koneksi.php"; 

// Proteksi halaman admin
if (!isset($_SESSION['username'])) {
    header("location:login.php"); 
    exit;
}

// Query untuk menghitung jumlah data dashboard
$sql_article = "SELECT * FROM article";
$result_article = $conn->query($sql_article);
$jumlah_article = $result_article->num_rows;

$sql_gallery = "SELECT * FROM article WHERE gambar != ''";
$result_gallery = $conn->query($sql_gallery);
$jumlah_gallery = $result_gallery->num_rows;

// Mengambil parameter halaman dari URL
$page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - My Daily Journal</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&display=swap');
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #f8fafc; }
        .bg-custom-blue { background-color: #dbeafe; } 
    </style>
</head>
<body class="min-h-screen flex flex-col">

    <nav class="bg-custom-blue p-4 shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto flex justify-between items-center px-6">
            <div class="text-blue-900 font-bold text-lg">My Daily Journal</div>
            <div class="flex items-center gap-6">
                <a href="admin.php?page=dashboard" class="text-blue-800 text-sm <?php echo $page == 'dashboard' ? 'font-bold border-b-2 border-blue-900' : ''; ?>">Dashboard</a>
                <a href="admin.php?page=article" class="text-blue-800 text-sm <?php echo $page == 'article' ? 'font-bold border-b-2 border-blue-900' : ''; ?>">Article</a>
                
                <div class="relative group">
                    <button class="text-red-500 font-bold text-sm flex items-center gap-1 uppercase">
                        <?php echo $_SESSION['username']; ?> <i class="fa-solid fa-caret-down"></i>
                    </button>
                    
                    <div class="absolute right-0 hidden group-hover:block bg-white shadow-xl rounded-lg py-2 w-32 border border-blue-100 z-50 top-full">
                        <a href="logout.php" class="block px-4 py-2 text-xs text-red-600 hover:bg-red-50 transition-colors">
                            <i class="fa-solid fa-right-from-bracket mr-2"></i> Logout
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <main class="flex-grow p-10">
        <div class="max-w-7xl mx-auto px-6">
            
            <?php if ($page == "dashboard"): ?>
                <h2 class="text-3xl font-light text-gray-700 mb-8 border-b pb-4">Dashboard</h2>
                <div class="flex flex-wrap gap-8 justify-center md:justify-start">
                    
                    <a href="admin.php?page=article" class="bg-white border-2 border-blue-100 rounded-xl p-8 flex items-center gap-10 shadow-sm min-w-[300px] hover:border-blue-400 transition-all">
                        <div class="text-gray-500 flex items-center gap-3">
                            <i class="fa-solid fa-table-list text-2xl"></i>
                            <span class="text-xl font-medium">Article</span>
                        </div>
                        <div class="bg-blue-600 text-white w-16 h-16 rounded-full flex items-center justify-center text-3xl font-bold shadow-md">
                            <?php echo $jumlah_article; ?>
                        </div>
                    </a>

                    <div class="bg-white border-2 border-blue-100 rounded-xl p-8 flex items-center gap-10 shadow-sm min-w-[300px]">
                        <div class="text-gray-500 flex items-center gap-3">
                            <i class="fa-solid fa-camera text-2xl"></i>
                            <span class="text-xl font-medium">Gallery</span>
                        </div>
                        <div class="bg-blue-600 text-white w-16 h-16 rounded-full flex items-center justify-center text-3xl font-bold shadow-md">
                            <?php echo $jumlah_gallery; ?>
                        </div>
                    </div>

                </div>

            <?php elseif ($page == "article"): ?>
                <?php include "article.php"; ?>
            <?php endif; ?>

        </div>
    </main>

    <footer class="bg-custom-blue py-8 mt-auto border-t border-blue-100">
        <div class="text-center flex flex-col items-center gap-4">
            <div class="flex gap-6 text-2xl text-blue-900">
                <a href="#" class="hover:text-blue-600 transition"><i class="fa-brands fa-instagram"></i></a>
                <a href="#" class="hover:text-blue-400 transition"><i class="fa-brands fa-twitter"></i></a>
                <a href="#" class="hover:text-green-500 transition"><i class="fa-brands fa-whatsapp"></i></a>
            </div>
            <p class="text-blue-900 text-sm font-medium">Putri Surya &copy; 2025</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>