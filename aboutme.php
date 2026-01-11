<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Me - Putri Surya</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap');
        
        body { 
            background-color: #e0f2fe; /* Warna Baby Blue yang konsisten */
            transition: all 0.3s ease; 
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: #0c4a6e;
        }
        
        .dark-mode { 
            background-color: #082f49; 
            color: #f0f9ff; 
        }

        .nav-custom { background-color: #1e40af; }
        .dark-mode .nav-custom { background-color: #0f172a; }

        .glass-card {
            background: #ffffff;
            border-radius: 2.5rem;
            border: 2px solid #bae6fd;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05);
            padding: 2.5rem;
        }

        .dark-mode .glass-card {
            background: rgba(15, 23, 42, 0.9);
            border-color: #0ea5e9;
        }

        .accent-box {
            background: #f0f9ff;
            border-radius: 1.5rem;
            padding: 1.5rem;
            border-left: 6px solid #3b82f6;
        }

        .dark-mode .accent-box {
            background: #1e293b;
        }

        .hobby-tag {
            background: #dbeafe;
            color: #1e40af;
            padding: 0.5rem 1rem;
            border-radius: 9999px;
            font-size: 0.875rem;
            font-weight: 700;
            display: inline-block;
            margin: 0.25rem;
        }
        
        h2, h3 { color: #1e3a8a; font-weight: 800; font-style: italic; }
        .dark-mode h2, .dark-mode h3 { color: #ffffff; }

        footer {
            background-color: #0f172a; /* Footer gelap sesuai request */
            color: #94a3b8;
        }
    </style>
</head>
<body>
    <nav class="sticky top-0 z-50 shadow-lg nav-custom">
        <div class="p-4">
            <div class="flex justify-between items-center max-w-7xl mx-auto px-4">
                <div class="flex items-center gap-8">
                    <a href="home.php" class="text-white hover:text-sky-200 font-black transition text-sm">HOME</a>
                    <a href="gallery.php" class="text-white hover:text-sky-200 font-black transition text-sm">GALLERY</a>
                    <a href="kontak.php" class="text-white hover:text-sky-200 font-black transition text-sm">KONTAK</a>
                    <a href="aboutme.php" class="text-white font-black transition text-sm border-b-2 border-white pb-1">ABOUT ME</a>
                </div>
                <div class="flex items-center gap-4">
                    <button onclick="toggleDarkMode()" class="bg-blue-700 dark:bg-slate-800 text-white px-4 py-1.5 rounded-full font-bold transition flex items-center gap-2 text-xs border border-blue-400">
                        <span id="darkModeIcon">🌙</span> <span id="darkModeText">Dark Mode</span>
                    </button>
                    <a href="login.php" class="bg-white text-blue-800 hover:bg-sky-100 px-6 py-1.5 rounded-full font-black transition shadow-md uppercase text-xs">
                        🔐 LOGIN
                    </a>
                </div>
            </div> 
        </div>
    </nav>

    <main class="max-w-6xl mx-auto mt-16 p-6">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            
            <div class="lg:col-span-1 space-y-8">
                <div class="glass-card text-center">
                    <div class="w-40 h-40 bg-sky-200 rounded-full mx-auto mb-6 border-4 border-white shadow-lg overflow-hidden">
                        <img src="./img/cewekcantik.jpeg" alt="Profile" class="w-full h-full object-cover ">
                    </div>
                    <h2 class="text-2xl mb-2 italic uppercase">It's Me!</h2>
                    <p class="text-sm leading-relaxed opacity-80">
                        Mahasiswa Teknik Informatika yang suka ngoding, desain web, dan eksplor teknologi baru!
                    </p>
                </div>

                <div class="glass-card">
                    <h3 class="text-lg uppercase italic mb-4 flex items-center gap-2">
                        <span>🎨</span> My Hobbies
                    </h3>
                    <div class="flex flex-wrap">
                        <span class="hobby-tag">🎬 Menonton Film</span>
                        <span class="hobby-tag">🍿 Netflix n Chill</span>
                        <span class="hobby-tag">🎧 Dengerin Musik</span>
                        <span class="hobby-tag">🧸 Pop Mart</span>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-2 space-y-8">
                <div class="glass-card">
                    <h2 class="text-3xl mb-8 border-b-4 border-sky-100 dark:border-sky-800 pb-2 italic uppercase">About Me</h2>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10">
                        <div class="accent-box">
                            <p class="text-[10px] font-black uppercase tracking-widest text-sky-500 mb-1">Nama Lengkap</p>
                            <p class="font-bold text-lg">Putri Surya (Puput)</p>
                        </div>
                        <div class="accent-box">
                            <p class="text-[10px] font-black uppercase tracking-widest text-sky-500 mb-1">Program Studi</p>
                            <p class="font-bold text-lg">Teknik Informatika</p>
                        </div>
                        <div class="accent-box">
                            <p class="text-[10px] font-black uppercase tracking-widest text-sky-500 mb-1">Tanggal Lahir</p>
                            <p class="font-bold text-lg">26 September 2005</p>
                        </div>
                        <div class="accent-box">
                            <p class="text-[10px] font-black uppercase tracking-widest text-sky-500 mb-1">Lokasi</p>
                            <p class="font-bold text-lg">Semarang, Indonesia</p>
                        </div>
                    </div>

                    <div class="space-y-6 text-lg leading-relaxed opacity-90">
                        <p>
                            Aku seorang mahasiswa Informatika yang kadang suka mengeksplor sisi manusiawi di balik teknologi. Buatku, dunia IT bukan cuma soal baris kode.
                        </p>
                        <p class="font-semibold italic text-sky-600 dark:text-sky-300">
                            "Teknologi harusnya menyambungkan manusia, membentuk hubungan, dan membuat hidup lebih bermakna."
                        </p>
                        <p>
                            Website ini aku buat bukan cuma sebagai tugas, tapi juga sebagai ruang kecil buat aku belajar, berkembang, dan berbagi sedikit cerita digital dan sudut pandangku sendiri.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="text-center py-10 mt-20 font-black text-xs uppercase tracking-widest">
        &copy; 2025 Putri Surya - Tugas Pemrograman Berbasis Web
    </footer>

    <script>
        const body = document.body;
        const icon = document.getElementById('darkModeIcon');
        const text = document.getElementById('darkModeText');

        if (localStorage.getItem('darkMode') === 'enabled') {
            body.classList.add('dark-mode');
            updateUI(true);
        }

        function toggleDarkMode() {
            const isDark = body.classList.toggle('dark-mode');
            localStorage.setItem('darkMode', isDark ? 'enabled' : 'disabled');
            updateUI(isDark);
        }

        function updateUI(isDark) {
            icon.textContent = isDark ? '☀️' : '🌙';
            text.textContent = isDark ? 'Light' : 'Dark Mode';
        }
    </script>
</body>
</html>