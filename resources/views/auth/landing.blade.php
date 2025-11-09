<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BanyuGrowth - Login Akses</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen flex items-center justify-center" style="background:linear-gradient(to right, #7BD87D, #4095BA);">

    <div class="w-full max-w-5xl flex items-center justify-between px-10">

        <!-- LEFT CARD -->
        <div class="bg-white w-[430px] rounded-2xl shadow-xl p-8">
            <h2 class="text-xl font-bold text-gray-700 mb-6">Masuk Sebagai</h2>

            <div class="space-y-5">
                <a href="/umkm/login" class="flex items-center border rounded-xl p-3 hover:bg-gray-100 transition">
                    <img src="/assets/img/umkm.png" class="w-10 mr-3">
                    <span class="font-semibold text-gray-700">UMKM</span>
                </a>
                <a href="/admin/login" class="flex items-center border rounded-xl p-3 hover:bg-gray-100 transition">
                    <img src="/assets/img/admin.png" class="w-10 mr-3">
                    <span class="font-semibold text-gray-700">Admin</span>
                </a>
            </div>

            <p class="text-sm text-center mt-6 text-gray-600">
                Belum punya akun BanyuGrowth?
                <a href="/umkm/register" class="text-blue-600 font-semibold">Daftar</a>
            </p>
        </div>

        <!-- PNG IMAGE RIGHT -->
        <div>
            <img src="/assets/img/gambar_login.png" class="w-[520px] drop-shadow-xl">
        </div>

    </div>

</body>
</html>
