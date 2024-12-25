@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
    <h2 class="text-2xl font-semibold mb-4">Edit Guru</h2>
    <form action="{{ route('guru.update', $guru->id) }}" method="POST" class="bg-white p-6 shadow-md rounded">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="nama" class="block text-gray-700">Nama</label>
            <input type="text" name="nama" id="nama" class="w-full mt-2 p-2 border rounded" value="{{ $guru->nama }}" required>
        </div>
        <div class="mb-4">
            <label for="nip" class="block text-gray-700">NIP</label>
            <input type="text" name="nip" id="nip" class="w-full mt-2 p-2 border rounded" value="{{ $guru->nip }}" required>
        </div>
        <div class="mb-4">
            <label for="email" class="block text-gray-700">Email</label>
            <input type="email" name="email" id="email" class="w-full mt-2 p-2 border rounded" value="{{ $guru->email }}" required>
        </div>
        <div class="mb-4">
            <label for="telepon" class="block text-gray-700">Telepon</label>
            <input type="text" name="telepon" id="telepon" class="w-full mt-2 p-2 border rounded" value="{{ $guru->telepon }}">
        </div>
        <div class="mb-4">
            <label for="mata_pelajaran" class="block text-gray-700">Mata Pelajaran</label>
            <input type="text" name="mata_pelajaran" id="mata_pelajaran" class="w-full mt-2 p-2 border rounded" value="{{ $guru->mata_pelajaran }}" required>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
        <a href="{{ route('guru.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded">Kembali</a>
    </form>
</div>
@endsection
