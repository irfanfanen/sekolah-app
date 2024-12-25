@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
    <h2 class="text-2xl font-semibold mb-4">Daftar Guru</h2>
    <a href="{{ route('guru.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah Guru</a>

    <table class="mt-4 w-full border-collapse border border-gray-300">
        <thead class="bg-gray-200">
            <tr>
                <th class="py-2 px-4 border">No</th>
                <th class="py-2 px-4 border">Nama</th>
                <th class="py-2 px-4 border">NIP</th>
                <th class="py-2 px-4 border">Email</th>
                <th class="py-2 px-4 border">Mata Pelajaran</th>
                <th class="py-2 px-4 border">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($gurus as $guru)
            <tr>
                <td class="py-2 px-4 border">{{ $loop->iteration }}</td>
                <td class="py-2 px-4 border">{{ $guru->nama }}</td>
                <td class="py-2 px-4 border">{{ $guru->nip }}</td>
                <td class="py-2 px-4 border">{{ $guru->email }}</td>
                <td class="py-2 px-4 border">{{ $guru->mata_pelajaran }}</td>
                <td class="py-2 px-4 border">
                    <a href="{{ route('guru.edit', $guru->id) }}" class="bg-yellow-500 text-white px-2 py-1 rounded">Edit</a>
                    <form action="{{ route('guru.destroy', $guru->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
