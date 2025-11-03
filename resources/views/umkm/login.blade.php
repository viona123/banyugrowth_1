<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login UMKM</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen flex items-center justify-center" style="background:linear-gradient(to right, #7BD87D, #4095BA);">
    
    <div class="bg-white w-96 rounded-xl shadow-lg p-8">
        <h2 class="text-2xl font-bold text-center mb-6 text-gray-700">Login UMKM</h2>

        <form action="/umkm/login" method="POST">
            @csrf

            <label class="block font-semibold text-gray-700">Username</label>
            <input type="text" name="username" required class="w-full border rounded-lg p-2 mb-4">

            <label class="block font-semibold text-gray-700">Password</label>
            <input type="password" name="password" required class="w-full border rounded-lg p-2 mb-6">

            <button class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">
                Login
            </button>
        </form>

        <p class="text-center text-sm mt-4">
            Belum punya akun?
            <a href="/umkm/register" class="text-blue-500 underline">Register</a>
        </p>
    </div>

</body>
</html>
