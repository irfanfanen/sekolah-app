<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Admin Sekolah</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <div class="flex h-screen">

        <!-- Sidebar -->
        <div class="w-64 bg-blue-900 text-white p-4">
            <h2 class="text-2xl font-semibold mb-6">Admin Sekolah</h2>
            <ul class="space-y-4">
                <li>
                    <a href="{{ route('guru.index') }}" class="block text-white hover:bg-blue-700 p-2 rounded">Guru</a>
                </li>
                <li>
                    <a href="{{ route('siswa.index') }}" class="block text-white hover:bg-blue-700 p-2 rounded">Siswa</a>
                </li>
                <li>
                    <a href="{{ route('mata-pelajaran.index') }}" class="block text-white hover:bg-blue-700 p-2 rounded">Mata Pelajaran</a>
                </li>
                <li>
                    <a href="{{ route('nilai.index') }}" class="block text-white hover:bg-blue-700 p-2 rounded">Nilai</a>
                </li>
                <li>
                    <a href="{{ route('evaluasi.peringkat') }}" class="block text-white hover:bg-blue-700 p-2 rounded">Evaluasi</a>
                </li>
            </ul>
        </div>

        <!-- Content Area -->
        <div class="flex-1 p-6 overflow-y-auto">
            @yield('content')
        </div>

    </div>

</body>
</html>
