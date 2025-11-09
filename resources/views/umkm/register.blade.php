<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register UMKM</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen flex items-center justify-center" style="background:linear-gradient(to right, #7BD87D, #4095BA);">
    
    <div class="bg-white w-96 rounded-xl shadow-lg p-8">
        <h2 class="text-2xl font-bold text-center mb-6 text-gray-700">Daftar UMKM</h2>

        

            <label class="block font-semibold text-gray-700">Nama Lengkap</label>
            <input type="text" name="nama" required class="w-full border rounded-lg p-2 mb-3">

            <label class="block font-semibold text-gray-700">Email</label>
            <input type="email" name="email" required class="w-full border rounded-lg p-2 mb-3">

            <label class="block font-semibold text-gray-700">No HP</label>
            <input type="text" name="no_hp" required class="w-full border rounded-lg p-2 mb-3">

            <label class="block font-semibold text-gray-700">Username UMKM</label>
            <input type="text" name="username" required class="w-full border rounded-lg p-2 mb-3">

            <label class="block font-semibold text-gray-700">Password</label>
            <input type="password" name="password" required class="w-full border rounded-lg p-2 mb-3">

            <label class="block font-semibold text-gray-700">Konfirmasi Password</label>
            <input type="password" name="password_confirmation" required class="w-full border rounded-lg p-2 mb-6">


           <div>
           <a href="/umkm/login">
            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">
                Register
            </button>
            </a>
              </div>
        
        

        <p class="text-center text-sm mt-4">
            Sudah punya akun?
            <a href="/umkm/login" class="text-blue-500 underline">Login</a>
        </p>
    </div>

</body>
</html>
