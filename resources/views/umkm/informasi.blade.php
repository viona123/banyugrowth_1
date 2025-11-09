<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Informasi Terkait | BanyuGrowth</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="bg-white text-gray-800">
  <!-- Header sederhana -->
  <header class="w-full flex items-center justify-between px-6 py-4 shadow-md bg-white sticky top-0 z-50">
    <div class="flex items-center gap-2">
      <img src="/assets/img/logo_banyugrowth.png" alt="logo" class="w-10">
      <h1 class="font-bold text-xl text-green-700">BanyuGrowth</h1>
    </div>
    <a href="/umkm/home" class="text-green-700 hover:text-green-800 font-semibold flex items-center gap-1">
      <i class="bi bi-arrow-left"></i> Kembali ke Beranda
    </a>
  </header>

  <main class="container mx-auto py-10 px-4">
    <!-- Informasi utama -->
    <div class="bg-white rounded-2xl shadow-lg border border-gray-200 p-6 mb-10">
      <img src="/assets/img/informasi_{{ $id ?? 1 }}.png" alt="Informasi {{ $id ?? 1 }}" class="w-full rounded-xl mb-6">
      <h2 class="font-bold text-2xl mb-4 text-green-700">Judul Informasi {{ $id ?? 1 }}</h2>
      <p class="text-gray-700 leading-relaxed">
        Ini adalah detail dari informasi yang kamu pilih. Konten ini bisa diambil dari database jika nanti sudah terhubung.
        Misalnya menjelaskan program UMKM, pelatihan, pembinaan, atau event terbaru di Banyumas.  
        Kamu dapat memperpanjang isi teks sesuai kebutuhan.  
      </p>
      <p class="mt-3 text-gray-600">
        Diterbitkan pada: <strong>5 November 2025</strong> oleh <strong>Admin BanyuGrowth</strong>
      </p>
    </div>

    <!-- Rekomendasi informasi lain -->
    <section>
      <h3 class="font-bold text-lg mb-4">Informasi Lainnya</h3>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        @foreach([1,2,3,4,5] as $item)
          @if(($id ?? 1) != $item)
          <a href="/umkm/informasi/{{ $item }}" class="bg-gray-50 border border-gray-200 rounded-xl overflow-hidden hover:shadow-lg transition transform hover:-translate-y-1">
            <img src="/assets/img/informasi_{{ $item }}.png" alt="Informasi {{ $item }}" class="w-full h-52 object-cover">
            <div class="p-3">
              <h4 class="font-semibold text-gray-800">Informasi {{ $item }}</h4>
              <p class="text-gray-500 text-sm mt-1">Klik untuk baca selengkapnya</p>
            </div>
          </a>
          @endif
        @endforeach
      </div>
    </section>
  </main>

  <footer class="text-center text-sm py-6 text-gray-500 border-t mt-10">
    © 2025 BanyuGrowth. Semua hak cipta dilindungi.
  </footer>
</body>
</html>
