<?php
session_start();

// Data login statis (Sesuai tutorial: ditulis langsung di kode)
$user_admin = "Admin";
$pass_admin = "123456";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Mengecek apakah input sesuai dengan data statis di atas
    if ($username === $user_admin && $password === $pass_admin) {
        $_SESSION['username'] = $username;
        // Dialihkan ke admin.php
        echo "<script>alert('Login Berhasil!'); window.location='admin.php';</script>";
    } else {
        $error = "Username atau Password Salah!";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - My Daily Journal</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { background-color: #f0f7ff; }
        .login-card { background: white; border-radius: 1.5rem; box-shadow: 0 10px 25px rgba(59, 130, 246, 0.1); }
        .info-blue { background-color: #e0efff; border: 1px solid #bddbff; color: #1e40af; }
    </style>
</head>
<body class="flex flex-col items-center justify-center min-h-screen p-4">

    <div class="login-card w-full max-w-sm p-8 text-center border border-blue-100">
        <div class="flex justify-center mb-4">
            <div class="bg-blue-500 p-4 rounded-full text-white shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                </svg>
            </div>
        </div>
        
        <h2 class="text-2xl font-bold text-blue-900 mb-6 italic">Welcome to my Daily Journal</h2>
        
        <form method="POST" class="space-y-4 text-left">
            <input type="text" name="username" placeholder="Username" required
                class="w-full px-4 py-2 border border-blue-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-400">
            
            <input type="password" name="password" placeholder="Password" required
                class="w-full px-4 py-2 border border-blue-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-400">
            
            <button type="submit" 
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 rounded-xl transition duration-300 shadow-md">
                MASUK
            </button>
        </form>

        <div class="mt-6 border-t pt-4">
            <a href="home.php" class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                ← Kembali ke Website
            </a>
        </div>
    </div>

    <div class="info-blue w-full max-w-sm mt-6 p-5 rounded-2xl shadow-sm text-sm">
        <div class="flex items-center gap-2 mb-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
            </svg>
            <span class="font-bold uppercase">Informasi Akun Admin:</span>
        </div>
        <ul class="list-none space-y-1 ml-1 font-medium">
            <li>User : <span class="font-bold italic">Admin</span></li>
            <li>Password : <span class="font-bold italic">123456</span></li>
        </ul>
        
        <div class="border-t border-blue-300 my-3"></div>
        

        <?php if(isset($error)): ?>
            <div class="mt-3 p-2 bg-red-100 border border-red-200 text-red-700 rounded-lg text-center font-bold">
                <?php echo $error; ?>
            </div>
        <?php endif; ?>
    </div>

</body>
</html>