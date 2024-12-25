@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-2xl font-semibold mb-4">Tambah Nilai</h2>
    <form action="{{ route('nilai.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="siswa_id" class="block">Siswa</label>
            <select name="siswa_id" id="siswa_id" class="w-full p-2 border rounded">
                @foreach($siswas as $siswa)
                <option value="{{ $siswa->id }}">{{ $siswa->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label for="mata_pelajaran_id" class="block">Mata Pelajaran</label>
            <select name="mata_pelajaran_id" id="mata_pelajaran_id" class="w-full p-2 border rounded">
                @foreach($mataPelajarans as $mataPelajaran)
                <option value="{{ $mataPelajaran->id }}">{{ $mataPelajaran->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label for="nilai" class="block">Nilai</label>
            <input type="number" name="nilai" id="nilai" class="w-full p-2 border rounded" required>
        </div>
        <button type="submit" class="bg-blue-500 text-white p-2 rounded">Simpan</button>
    </form>
</div>
@endsection
