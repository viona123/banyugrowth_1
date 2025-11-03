<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BanyuGrowth | Home</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .category-item img {
            width: 70px;
            height: 70px;
            object-fit: contain;
            margin: 0 auto;
        }
        .category-item p {
            font-size: 14px;
            margin-top: 6px;
        }
        footer img {
            height: 30px;
        }

        /* ✅ Search bar oval & icon diperpanjang dan dirapatkan ke logo */
        .search-wrapper {
            position: relative;
            width: 900px; /* diperpanjang */
            margin-left: 20px; /* lebih dekat dengan logo */
        }
        .search-input {
            width: 100%;
            border-radius: 9999px;
            padding: 8px 42px 8px 16px;
            border: 1px solid #ccc;
            outline: none;
            transition: 0.3s;
        }
        .search-input:focus {
            border-color: #22c55e;
            box-shadow: 0 0 4px rgba(34, 197, 94, 0.4);
        }
        .search-wrapper i {
            position: absolute;
            right: 14px;
            top: 50%;
            transform: translateY(-50%);
            color: #666;
            font-size: 18px;
        }

        /* ✅ Perbaiki FAQ biar tidak hilang-hilang */
        .accordion-button:focus {
            box-shadow: none;
        }
        .accordion-collapse {
            transition: height 0.3s ease;
        }
    </style>
</head>
<body class="bg-white text-gray-800">

    <!-- HEADER -->
    <header class="w-full flex items-center justify-between px-6 py-4 shadow-md bg-white sticky top-0 z-50">
        <div class="flex items-center gap-2">
            <img src="/assets/img/logo_banyugrowth.png" alt="logo" class="w-10">
            <h1 class="font-bold text-xl text-green-700">BanyuGrowth</h1>
            <!-- ✅ Search bar lebih panjang & dekat logo -->
            <div class="search-wrapper">
                <input type="text" placeholder="Cari produk atau UMKM..." class="search-input " />
                <i class="bi bi-search"></i>
            </div>
        </div>
        <div class="flex items-center gap-3">
            <button class="text-xl"><i class="bi bi-bell"></i></button>
            <button class="text-2xl"><i class="bi bi-person-circle"></i></button>
        </div>
    </header>

    <!-- SLIDER -->
    <section class="mt-4 container mx-auto">
        <div id="mainSlider" class="carousel slide rounded-xl overflow-hidden shadow" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/assets/img/slide_1.png" class="d-block w-100" alt="Slide 1">
                </div>
                <div class="carousel-item">
                    <img src="/assets/img/slide_2.png" class="d-block w-100" alt="Slide 2">
                </div>
                <div class="carousel-item">
                    <img src="/assets/img/slide_3.png" class="d-block w-100" alt="Slide 3">
                </div>
            </div>
        </div>
    </section>

    <!-- KATEGORI -->
    <section class="mt-6 container mx-auto">
        <h2 class="font-bold text-lg mb-3">Kategori</h2>
        <div class="grid grid-cols-3 md:grid-cols-5 gap-4 text-center">
            <div class="category-item">
                <img src="/assets/img/fashion_pria.png" alt="Fashion Pria">
                <p>Fashion Pria</p>
            </div>
            <div class="category-item">
                <img src="/assets/img/fashion_wanita.png" alt="Fashion Wanita">
                <p>Fashion Wanita</p>
            </div>
            <div class="category-item">
                <img src="/assets/img/makanan_dan_minuman.png" alt="Makanan & Minuman">
                <p>Makanan & Minuman</p>
            </div>
            <div class="category-item">
                <img src="/assets/img/perawatan_tubuh.png" alt="Perawatan Tubuh">
                <p>Perawatan Tubuh</p>
            </div>
            <div class="category-item">
                <img src="/assets/img/sovenir_dan_merchandise.png" alt="Sovenir & Merchandise">
                <p>Sovenir & Merchandise</p>
            </div>
        </div>
    </section>

    <!-- INFORMASI TERKAIT -->
    <section class="mt-6 container mx-auto">
        <h2 class="font-bold text-lg mb-3">Informasi Terkait</h2>
        <div class="grid md:grid-cols-3 gap-4">
            <div class="bg-gray-100 rounded-xl overflow-hidden shadow">
                <img src="/assets/img/informasi_1.png" class="w-full h-72 object-cover">
            </div>
            <div class="bg-gray-100 rounded-xl overflow-hidden shadow">
                <img src="/assets/img/informasi_2.png" class="w-full h-72 object-cover">
            </div>
            <div class="bg-gray-100 rounded-xl overflow-hidden shadow">
                <img src="/assets/img/informasi_3.png" class="w-full h-72 object-cover">
            </div>
        </div>
    </section>

    <!-- PERTANYAAN UMUM -->
    <section class="mt-8 container mx-auto">
        <h2 class="font-bold text-lg mb-3">Pertanyaan Umum</h2>

        <!-- ✅ FAQ perbaikan: stabil & tidak hilang -->
        <div class="accordion" id="faqAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading1">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true" aria-controls="faq1">
                        Bagaimana cara mengubah data usaha setelah terdaftar?
                    </button>
                </h2>
                <div id="faq1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#faqAccordion">
                    <div class="accordion-body text-sm">
                        Setelah Anda mendaftarkan UMKM di sistem BanyuGrowth dan akun Anda telah diverifikasi oleh admin, Anda dapat mengubah data usaha dengan login ke akun Anda. Semua perubahan akan tersimpan otomatis setelah disimpan.
                    </div>
                </div>
            </div>

            <div class="accordion-item mt-2">
                <h2 class="accordion-header" id="heading2">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                        Apa saja data yang perlu disiapkan saat mendaftar UMKM?
                    </button>
                </h2>
                <div id="faq2" class="accordion-collapse collapse" aria-labelledby="heading2">
                    <div class="accordion-body text-sm">
                        Siapkan identitas pemilik, akun pengguna, informasi usaha, serta dokumen legalitas seperti NIB atau izin usaha dalam format PDF atau JPG.
                    </div>
                </div>
            </div>

            <div class="accordion-item mt-2">
                <h2 class="accordion-header" id="heading3">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                        Keuntungan mendaftarkan UMKM dengan BanyuGrowth
                    </button>
                </h2>
                <div id="faq3" class="accordion-collapse collapse" aria-labelledby="heading3">
                    <div class="accordion-body text-sm">
                        BanyuGrowth membantu UMKM mengelola data usaha, laporan statistik, keamanan data, serta memperluas jangkauan pemasaran digital dengan lebih mudah.
                    </div>
                </div>
            </div>

            <div class="accordion-item mt-2">
                <h2 class="accordion-header" id="heading4">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                        Cara Daftar/Registrasi di Pasar Digital UMKM
                    </button>
                </h2>
                <div id="faq4" class="accordion-collapse collapse" aria-labelledby="heading4">
                    <div class="accordion-body text-sm">
                        Kunjungi website BanyuGrowth, klik “Daftar sebagai UMKM”, isi formulir pendaftaran, unggah dokumen, lalu tunggu verifikasi admin sebelum akun aktif.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="mt-10 bg-gray-100 py-6 border-t">
        <div class="container mx-auto text-center">
            <p class="font-semibold text-green-700 text-lg">BanyuGrowth</p>
            <p class="text-sm text-gray-600">Jl. HR. Boenyamin No.703, Purwokerto Utara, Banyumas</p>

            <p class="mt-4 font-medium">Metode Pembayaran:</p>
            <div class="flex justify-center flex-wrap gap-5 mt-2">
                <img src="/assets/img/mandiri.png" alt="Mandiri">
                <img src="/assets/img/BCA.png" alt="BCA">
                <img src="/assets/img/BRI.png" alt="BRI">
                <img src="/assets/img/BNI.png" alt="BNI">
                <img src="/assets/img/BSI.png" alt="BSI">
                <img src="/assets/img/Qris.png" alt="Qris">
                <img src="/assets/img/Dana.png" alt="Dana">
            </div>

            <p class="text-xs text-gray-500 mt-4">© 2025 BanyuGrowth. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
