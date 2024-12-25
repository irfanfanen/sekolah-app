@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
    <div class="bg-white shadow-md rounded-lg p-6">
        <h2 class="text-2xl font-semibold text-gray-800">Edit Mata Pelajaran</h2>
        <form action="{{ route('mata-pelajaran.update', $mataPelajaran->id) }}" method="POST" class="mt-4">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="nama" class="block text-sm font-medium text-gray-700">Nama Mata Pelajaran</label>
                <input type="text" name="nama" id="nama" value="{{ $mataPelajaran->nama }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
            </div>

            {{-- <div class="mb-4">
                <label for="kode_mapel" class="block text-sm font-medium text-gray-700">Kode Mata Pelajaran</label>
                <input type="text" name="kode_mapel" id="kode_mapel" value="{{ $mataPelajaran->kode_mapel }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
            </div> --}}

            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
                <a href="{{ route('mata-pelajaran.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded">Kembali</a>
            </div>
        </form>
    </div>
</div>
@endsection
