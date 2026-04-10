<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AmikomEventHub</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 font-sans text-gray-800">

    <nav class="bg-white/80 backdrop-blur-md border-b border-gray-200 sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <a href="/" class="text-2xl font-extrabold text-teal-600 tracking-tight">EventHub.</a>
                <div class="hidden md:flex space-x-8 font-medium text-sm">
                    <a href="/" class="text-teal-600 border-b-2 border-teal-600 pb-1">Home</a>
                    <a href="/profil" class="text-gray-500 hover:text-teal-600 transition">Profil</a>
                    <a href="/katalog" class="text-gray-500 hover:text-teal-600 transition">Katalog</a>
                    <a href="/bantuan" class="text-gray-500 hover:text-teal-600 transition">Bantuan</a>
                    <a href="/kontak" class="text-gray-500 hover:text-teal-600 transition">Kontak</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="max-w-6xl mx-auto px-4 py-16 mt-10">
        <div class="flex flex-col lg:flex-row items-center gap-12">
            <div class="lg:w-1/2">
                <span class="inline-block py-1 px-3 rounded-full bg-teal-50 text-teal-600 text-sm font-semibold mb-6 border border-teal-100">🚀 Platform Event #1 di Kampus</span>
                <h1 class="text-5xl font-extrabold leading-tight text-gray-900 mb-6">
                    Temukan & Ikuti Event Keren di Sekitarmu.
                </h1>
                <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                    AmikomEventHub memudahkan kamu untuk mencari workshop, seminar, dan kompetisi terbaru untuk meningkatkan skill dan relasi kamu.
                </p>
                <div class="flex gap-4">
                    <a href="/katalog" class="bg-teal-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-teal-700 shadow-lg shadow-teal-200 transition-all transform hover:-translate-y-1">Jelajahi Event</a>
                    <a href="/profil" class="bg-white text-gray-700 border border-gray-300 px-6 py-3 rounded-lg font-semibold hover:bg-gray-50 transition-all">Lihat Profil</a>
                </div>
            </div>
            <div class="lg:w-1/2 w-full">
                <div class="aspect-video bg-gradient-to-tr from-teal-400 to-emerald-300 rounded-2xl shadow-2xl flex items-center justify-center text-white font-bold text-2xl">
                    [Ilustrasi Hero Section]
                </div>
            </div>
        </div>
    </main>

</body>
</html>