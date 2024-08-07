<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifikasi Pendaftaran</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

    <div class="max-w-md w-full bg-white shadow-md rounded-lg p-6">
        <div class="text-center mb-6">
            <h2 class="text-2xl font-bold text-green-600">Selamat!</h2>
            <p class="text-gray-700 mt-2">Anda telah berhasil mendaftar.</p>
        </div>

        <div class="mb-6">
            <p class="text-gray-600 text-center">
                Terima kasih telah mendaftar. Silakan klik tombol di bawah ini untuk melanjutkan ke dashboard.
            </p>
        </div>

        <div class="flex justify-center">
            <a href="{{ route('dashboard') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md shadow hover:bg-blue-600 transition duration-200">
                Ke Dashboard
            </a>
        </div>
    </div>

</body>
</html>
