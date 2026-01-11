<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kontak - My Daily Journal</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;800&display=swap');
        
        body { 
            background-color: #e0f2fe; 
            transition: all 0.3s ease; 
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
        
        .dark-mode { background-color: #0c4a6e; color: white; }
        
        /* Navigasi Glassmorphism */
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

        .dark-mode .glass-card {
            background: rgba(47, 116, 156, 0.9);
            border-color: #d0dce8;
            color: white;
        }

        /* Styling Input modern */
        input, textarea {
            background: #f0f9ff !important;
            border: 2px solid #bae6fd !important;
            border-radius: 1.25rem !important;
            color: #0369a1 !important;
            font-weight: 600;
        }

        input:focus, textarea:focus {
            border-color: #38bdf8 !important;
            box-shadow: 0 0 0 4px rgba(56, 189, 248, 0.1);
        }

        label { 
            color: #0369a1; 
            font-weight: 800; 
            text-transform: uppercase; 
            font-size: 0.7rem; 
            letter-spacing: 0.1em; 
            margin-left: 0.5rem;
        }
        
        .dark-mode label { color: #9cc3de; }
    </style>
</head>
<body>
    <nav class="sticky top-0 z-50 shadow-sm nav-custom">
        <div class="p-4">
            <div class="flex justify-between items-center max-w-7xl mx-auto px-4">
                <div class="flex items-center gap-8">
                    <a href="home.php" class="text-sky-800 hover:text-sky-500 font-black transition tracking-wide text-sm">HOME</a>
                    <a href="gallery.php" class="text-sky-800 hover:text-sky-500 font-black transition tracking-wide text-sm">GALLERY</a>
                    <a href="kontak.php" class="text-sky-800 hover:text-sky-500 font-black transition tracking-wide text-sm underline decoration-4 underline-offset-8">KONTAK</a>
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

    <main class="max-w-6xl mx-auto mt-16 p-4">
        
        <div class="text-center mb-16 relative">
            <div class="absolute inset-0 -top-10 justify-center flex opacity-20 blur-3xl pointer-events-none">
                <div class="w-64 h-32 bg-sky-400 rounded-full"></div>
            </div>

            <div class="relative z-10">
                <h1 class="text-5xl md:text-6xl font-black mb-4 tracking-tighter">
                    <span class="bg-clip-text text-transparent bg-gradient-to-r from-sky-600 to-sky-400 italic">
                        Get In Touch.
                    </span>
                </h1>
                <div class="flex items-center justify-center gap-3 mb-4">
                    <div class="h-[2px] w-12 bg-sky-200"></div>
                    <span class="text-sky-900 font-black uppercase tracking-[0.3em] text-xs">Let's Connect</span>
                    <div class="h-[2px] w-12 bg-sky-200"></div>
                </div>
                <p class="text-sky-700/80 font-medium text-lg max-w-xl mx-auto leading-relaxed italic">
                    Hii! Silahkan hubungi saya jika ada keperluan atau sekadar ingin menyapa!
                </p>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-5 gap-10 items-start">
            
            <div class="lg:col-span-2 space-y-6">
                <div class="glass-card rounded-[3rem] p-8 shadow-2xl">
                    <h3 class="text-xl font-black text-sky-900 uppercase italic mb-8 border-b-2 border-sky-100 pb-2">My Contact Detail</h3>
                    
                    <div class="space-y-8">
                        <div class="flex items-center gap-5 group">
                            <div class="bg-sky-500 w-14 h-14 rounded-2xl flex items-center justify-center text-white text-2xl shadow-lg transition group-hover:rotate-12">📞</div>
                            <div>
                                <p class="text-[10px] font-black uppercase tracking-widest text-sky-400">WhatsApp</p>
                                <p class="text-lg font-bold text-sky-900">0895361550900</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-5 group">
                            <div class="bg-sky-500 w-14 h-14 rounded-2xl flex items-center justify-center text-white text-2xl shadow-lg transition group-hover:rotate-12">📸</div>
                            <div>
                                <p class="text-[10px] font-black uppercase tracking-widest text-sky-400">Instagram</p>
                                <p class="text-lg font-bold text-sky-900">@sheis.puput</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-5 group">
                            <div class="bg-sky-500 w-14 h-14 rounded-2xl flex items-center justify-center text-white text-2xl shadow-lg transition group-hover:rotate-12">✉️</div>
                            <div class="overflow-hidden">
                                <p class="text-[10px] font-black uppercase tracking-widest text-sky-400">Gmail</p>
                                <p class="text-sm font-bold text-sky-900 break-all leading-tight">111202415765@mhs.dnus.ac.id</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-12 p-6 bg-sky-50/50 rounded-[2.5rem] border-2 border-dashed border-sky-200 text-sky-700 text-xs font-bold leading-relaxed">
                        ✨ Senang bisa berkenalan dengan Anda! Jangan ragu untuk mengirim pesan, saya akan membalas secepat mungkin.
                    </div>
                </div>
            </div>

            <div class="lg:col-span-3">
                <div class="glass-card rounded-[3rem] p-10 shadow-2xl">
                    <div class="flex items-center gap-4 mb-10">
                        <span class="text-3xl bg-sky-100 p-3 rounded-2xl">📝</span>
                        <h2 class="text-2xl font-black text-sky-900 uppercase italic">Buku Tamu</h2>
                    </div>

                    <form action="" method="POST" class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block mb-2">Nama Lengkap</label>
                                <input type="text" class="w-full px-5 py-4 focus:outline-none transition" placeholder="Siapa nama Anda?" required />
                            </div>
                            <div>
                                <label class="block mb-2">Asal Instansi</label>
                                <input type="text" class="w-full px-5 py-4 focus:outline-none transition" placeholder="Kampus / Perusahaan" />
                            </div>
                        </div>

                        <div>
                            <label class="block mb-2">Alamat Email</label>
                            <input type="email" class="w-full px-5 py-4 focus:outline-none transition" placeholder="email@contoh.com" required />
                        </div>

                        <div>
                            <label class="block mb-2">Pesan Anda</label>
                            <textarea rows="5" class="w-full px-5 py-4 focus:outline-none transition resize-none" placeholder="Apa yang ingin Anda sampaikan?" required></textarea>
                        </div>

                        <div class="flex justify-end pt-4">
                            <button type="submit" class="bg-sky-500 hover:bg-sky-600 text-white font-black px-12 py-4 rounded-full transition shadow-xl transform hover:scale-105 active:scale-95 text-xs tracking-widest uppercase flex items-center gap-2">
                                Kirim Pesan Sekarang <span class="text-lg">→</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

        <footer class="text-center py-16 text-sky-900/40 font-black text-xs uppercase tracking-widest">
            &copy; 2025 Putri Surya - My Daily Journal
        </footer>
    </main>

    <script>
        // DARK MODE LOGIC
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