@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
    <div class="bg-white shadow-md rounded-lg p-6">
        <h2 class="text-2xl font-semibold text-gray-800">Daftar Siswa</h2>
        <a href="{{ route('siswa.create') }}" class="mt-4 inline-block bg-blue-500 text-white px-4 py-2 rounded-md">Tambah Siswa</a>
        <table class="mt-6 min-w-full bg-white border border-gray-200">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b text-left">No</th>
                    <th class="py-2 px-4 border-b text-left">Nama</th>
                    <th class="py-2 px-4 border-b text-left">Kelas</th>
                    <th class="py-2 px-4 border-b text-left">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($siswas as $index => $siswa)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $index + 1 }}</td>
                        <td class="py-2 px-4 border-b">{{ $siswa->nama }}</td>
                        <td class="py-2 px-4 border-b">{{ $siswa->kelas }}</td>
                        <td class="py-2 px-4 border-b">
                            <a href="{{ route('siswa.edit', $siswa->id) }}" class="inline-block text-sm bg-green-500 text-white px-2 py-1 rounded hover:bg-green-600">Edit</a>
                            <form action="{{ route('siswa.destroy', $siswa->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-sm bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
