<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gallery - My Daily Journal</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { background-color: #e0f2fe; transition: all 0.3s ease; }
        .dark-mode { background-color: #0c4a6e; color: white; }
        
        /* Navigasi Glassmorphism Aesthetic */
        .nav-custom {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(15px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.3);
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border: 4px solid #bae6fd;
        }

        .image-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .image-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        p, h1, h2 { color: #0369a1; }
        .dark-mode p, .dark-mode h1, .dark-mode h2 { color: #9cc3de; }
    </style>
</head>
<body>
    <nav class="sticky top-0 z-50 shadow-sm nav-custom">
        <div class="p-4">
            <div class="flex justify-between items-center max-w-6xl mx-auto px-4">
                <div class="flex items-center gap-8">
                    <a href="home.php" class="text-sky-800 hover:text-sky-500 font-black transition tracking-wide text-sm">HOME</a>
                    <a href="gallery.php" class="text-sky-500 border-b-2 border-sky-500 font-black transition tracking-wide text-sm">GALLERY</a>
                    <a href="kontak.php" class="text-sky-800 hover:text-sky-500 font-black transition tracking-wide text-sm">KONTAK</a>
                    <a href="aboutme.php" class="text-sky-800 hover:text-sky-500 font-black transition tracking-wide text-sm">ABOUT ME</a>
                </div>
                <div class="flex items-center gap-4">
                    <button onclick="toggleDarkMode()" class="bg-white/50 border border-sky-200 px-4 py-1.5 rounded-full font-bold text-sky-800 transition flex items-center gap-2 text-xs shadow-sm">
                        <span id="darkModeIcon">🌙</span> <span id="darkModeText">Dark Mode</span>
                    </button>
                    <a href="login.php" class="bg-sky-500 text-white hover:bg-sky-600 px-6 py-1.5 rounded-full font-black transition shadow-md uppercase text-xs">
                        🔐 LOGIN
                    </a>
                </div>
            </div> 
        </div>
    </nav>

    <main class="max-w-5xl mx-auto mt-10 p-4">
        <div class="glass-card rounded-[3rem] p-10 shadow-2xl">
            <div class="flex items-center gap-4 mb-8 border-b-4 border-sky-100 pb-6">
                <span class="text-3xl">🖼️</span>
                <h2 class="text-2xl font-black text-sky-900 uppercase italic">Koleksi Foto Semarang</h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                
                <div class="image-card bg-white p-3 rounded-[2rem] border-2 border-sky-50">
                    <img src="./img/kotalama.jpg" class="w-full h-48 object-cover rounded-[1.5rem]" />
                    <p class="text-center font-black mt-3 text-xs uppercase tracking-widest">Kota Lama</p>
                </div>

                <div class="image-card bg-white p-3 rounded-[2rem] border-2 border-sky-50">
                    <img src="./img/lawangsewu.jpg" class="w-full h-48 object-cover rounded-[1.5rem]" />
                    <p class="text-center font-black mt-3 text-xs uppercase tracking-widest">Lawang Sewu</p>
                </div>

                <div class="image-card bg-white p-3 rounded-[2rem] border-2 border-sky-50">
                    <img src="./img/masjidagung.jpg" class="w-full h-48 object-cover rounded-[1.5rem]" />
                    <p class="text-center font-black mt-3 text-xs uppercase tracking-widest">Masjid Agung</p>
                </div>

                <div class="image-card bg-white p-3 rounded-[2rem] border-2 border-sky-50">
                    <img src="./img/saloka.jpg" class="w-full h-48 object-cover rounded-[1.5rem]" />
                    <p class="text-center font-black mt-3 text-xs uppercase tracking-widest">Saloka Theme Park</p>
                </div>

                <div class="image-card bg-white p-3 rounded-[2rem] border-2 border-sky-50">
                    <img src="./img/simpang_lima.jpg" class="w-full h-48 object-cover rounded-[1.5rem]" />
                    <p class="text-center font-black mt-3 text-xs uppercase tracking-widest">Simpang Lima</p>
                </div>

                <div class="image-card bg-white p-3 rounded-[2rem] border-2 border-sky-50">
                    <img src="./img/stasiun tawang.jpg" class="w-full h-48 object-cover rounded-[1.5rem]" />
                    <p class="text-center font-black mt-3 text-xs uppercase tracking-widest">Stasiun Tawang</p>
                </div>

                <div class="image-card bg-white p-3 rounded-[2rem] border-2 border-sky-50">
                    <img src="./img/thepark.jpg" class="w-full h-48 object-cover rounded-[1.5rem]" />
                    <p class="text-center font-black mt-3 text-xs uppercase tracking-widest">The Park Mall</p>
                </div>

                <div class="image-card bg-white p-3 rounded-[2rem] border-2 border-sky-50">
                    <img src="./img/udinus-1.jpg" class="w-full h-48 object-cover rounded-[1.5rem]" />
                    <p class="text-center font-black mt-3 text-xs uppercase tracking-widest">Kampus Udinus</p>
                </div>

                <div class="image-card bg-white p-3 rounded-[2rem] border-2 border-sky-50">
                    <img src="./img/marina_beach.jpeg" class="w-full h-48 object-cover rounded-[1.5rem]" />
                    <p class="text-center font-black mt-3 text-xs uppercase tracking-widest">Pantai Marina</p>
                </div>

            </div>
        </div>

        <footer class="text-center py-10 text-sky-900/50 font-black text-xs uppercase tracking-widest">
            &copy; 2025 Putri Surya - My Daily Journal
        </footer>
    </main>

    <script>
        // Dark Mode Logic agar sinkron dengan Home
        if (localStorage.getItem('darkMode') === 'enabled') {
            document.body.classList.add('dark-mode');
            updateDarkModeButton();
        }
        function toggleDarkMode() {
            document.body.classList.toggle('dark-mode');
            localStorage.setItem('darkMode', document.body.classList.contains('dark-mode') ? 'enabled' : 'disabled');
            updateDarkModeButton();
        }
        function updateDarkModeButton() {
            const icon = document.getElementById('darkModeIcon');
            const text = document.getElementById('darkModeText');
            const isDark = document.body.classList.contains('dark-mode');
            icon.textContent = isDark ? '☀️' : '🌙';
            text.textContent = isDark ? 'Light' : 'Dark Mode';
        }
    </script>
</body>
</html>