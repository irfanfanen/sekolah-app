@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-2xl font-semibold mb-4">Daftar Nilai</h2>
    <a href="{{ route('nilai.create') }}" class="bg-blue-500 text-white p-2 rounded">Tambah Nilai</a>
    <table class="min-w-full table-auto mt-4">
        <thead>
            <tr>
                <th class="border px-4 py-2">Nama Siswa</th>
                <th class="border px-4 py-2">Mata Pelajaran</th>
                <th class="border px-4 py-2">Nilai</th>
                <th class="border px-4 py-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($nilais as $nilai)
            <tr>
                <td class="border px-4 py-2">{{ $nilai->siswa->nama }}</td>
                <td class="border px-4 py-2">{{ $nilai->mataPelajaran->nama }}</td>
                <td class="border px-4 py-2">{{ $nilai->nilai }}</td>
                <td class="border px-4 py-2">
                    <a href="{{ route('nilai.edit', $nilai) }}" class="bg-yellow-500 text-white p-2 rounded">Edit</a>
                    <form action="{{ route('nilai.destroy', $nilai) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white p-2 rounded">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
