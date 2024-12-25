@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
    <h2 class="text-2xl font-semibold mb-4">Edit Kelas</h2>
    <form action="{{ route('kelas.update', $kelas->id) }}" method="POST" class="bg-white p-6 shadow-md rounded">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="nama_kelas" class="block text-gray-700">Nama Kelas</label>
            <input type="text" name="nama_kelas" id="nama_kelas" class="w-full mt-2 p-2 border rounded" value="{{ $kelas->nama_kelas }}" required>
        </div>
        <div class="mb-4">
            <label for="wali_kelas" class="block text-gray-700">Wali Kelas</label>
            <input type="text" name="wali_kelas" id="wali_kelas" class="w-full mt-2 p-2 border rounded" value="{{ $kelas->wali_kelas }}" required>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
        <a href="{{ route('kelas.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded">Kembali</a>
    </form>
</div>
@endsection
