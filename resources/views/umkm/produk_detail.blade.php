<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Produk | BanyuGrowth</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="bg-white text-gray-800">
  <!-- HEADER -->
  <header class="w-full flex items-center justify-between px-6 py-4 shadow-md bg-white sticky top-0 z-50">
    <div class="flex items-center gap-2">
      <img src="/assets/img/logo_banyugrowth.png" alt="logo" class="w-10">
      <h1 class="font-bold text-xl text-green-700">BanyuGrowth</h1>
    </div>
    <a href="/umkm/home" class="text-green-700 hover:text-green-800 font-semibold flex items-center gap-1">
      <i class="bi bi-arrow-left"></i> Kembali ke Beranda
    </a>
  </header>

  <!-- DETAIL PRODUK -->
  <main class="container mx-auto py-10 px-4">
    <div class="grid md:grid-cols-2 gap-10 items-start bg-white shadow-lg rounded-2xl p-6 border border-gray-200">
      <div>
        <img src="/assets/img/logo_produk_{{ $id ?? 1 }}.jpg" alt="Produk" class="w-full rounded-xl shadow-md">
      </div>
      <div>
        <h2 class="font-bold text-2xl text-green-700 mb-2">Delicious Cookies</h2>
        <p class="text-gray-600 mb-4">UMKM: <strong>Delicious Cookies Banyumas</strong></p>
        <p class="text-lg text-gray-800 mb-4 leading-relaxed">
          Delicious Cookies adalah usaha lokal dari Banyumas yang memproduksi berbagai jenis kue kering berkualitas premium seperti nastar, choco chips, dan butter cookies.
          Cocok untuk hampers, acara keluarga, maupun oleh-oleh khas Banyumas.
        </p>
        <p class="text-green-700 font-bold text-xl mb-4">Rp 50.000 - Rp 120.000</p>

        <a href="/umkm/order/{{ $id ?? 1 }}" class="px-5 py-2 bg-green-600 text-white rounded-full hover:bg-green-700 transition">
          Pesan Sekarang
        </a>
      </div>
    </div>

    <!-- GALERI PRODUK -->
    <section class="mt-10">
      <h3 class="font-bold text-xl mb-5">Produk Lain dari Delicious Cookies</h3>
      <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6">
        @foreach([1,2,3,4] as $g)
        <div class="bg-white border rounded-xl shadow hover:shadow-lg transition overflow-hidden">
          <img src="/assets/img/produk_umkm_{{ $g }}.jpg" alt="Produk Lain" class="w-full h-40 object-cover">
          <div class="p-3 text-center">
            <p class="font-medium text-gray-700 text-sm">Produk Varian {{ $g }}</p>
          </div>
        </div>
        @endforeach
      </div>
    </section>
  </main>

  <!-- FOOTER -->
  <footer class="text-center text-sm py-6 text-gray-500 border-t mt-10">
    © 2025 BanyuGrowth. Semua hak cipta dilindungi.
  </footer>
</body>
</html>
