@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
    <div class="bg-white shadow-md rounded-lg p-6">
        <h2 class="text-2xl font-semibold text-gray-800">Edit Siswa</h2>
        <form action="{{ route('siswa.update', $siswa->id) }}" method="POST" enctype="multipart/form-data" class="mt-4">
            @csrf
            @method('PUT') <!-- Gunakan metode PUT untuk update data -->
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                <div>
                    <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                    <input type="text" name="nama" id="nama" class="w-full mt-2 p-2 border rounded" value="{{ old('nama', $siswa->nama) }}" required>
                </div>
                <div>
                    <label for="nisn" class="block text-sm font-medium text-gray-700">NISN</label>
                    <input type="text" name="nisn" id="nisn" class="w-full mt-2 p-2 border rounded" value="{{ old('nisn', $siswa->nisn) }}" required>
                </div>
                <div>
                    <label for="jenis_kelamin" class="block text-sm font-medium text-gray-700">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="jenis_kelamin" class="w-full mt-2 p-2 border rounded" required>
                        <option value="Laki-laki" {{ $siswa->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                        <option value="Perempuan" {{ $siswa->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                </div>
                <div>
                    <label for="tanggal_lahir" class="block text-sm font-medium text-gray-700">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="w-full mt-2 p-2 border rounded" value="{{ old('tanggal_lahir', $siswa->tanggal_lahir) }}" required>
                </div>
                <div>
                    <label for="kelas" class="block text-sm font-medium text-gray-700">Kelas</label>
                    <input type="text" name="kelas" id="kelas" class="w-full mt-2 p-2 border rounded" value="{{ old('kelas', $siswa->kelas) }}" required>
                </div>
                <div>
                    <label for="email_orangtua" class="block text-sm font-medium text-gray-700">Email Orang Tua</label>
                    <input type="email" name="email_orangtua" id="email_orangtua" class="w-full mt-2 p-2 border rounded" value="{{ old('email_orangtua', $siswa->email_orangtua) }}" required>
                </div>
                <div>
                    <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
                    <textarea name="alamat" id="alamat" class="w-full mt-2 p-2 border rounded" required>{{ old('alamat', $siswa->alamat) }}</textarea>
                </div>
                <div>
                    <label for="foto" class="block text-sm font-medium text-gray-700">Foto</label>
                    <input type="file" name="foto" id="foto" class="w-full mt-2 p-2 border rounded">
                    @if($siswa->foto)
                    <img src="{{ asset('storage/' . $siswa->foto) }}" alt="Foto Siswa" class="mt-2 w-32 h-32 object-cover rounded">
                    @endif
                </div>
            </div>
            <div class="mt-4">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
                <a href="{{ route('siswa.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded text-center">Kembali</a>
            </div>
        </form>
    </div>
</div>
@endsection
