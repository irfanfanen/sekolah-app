@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
    <h2 class="text-2xl font-semibold mb-4">Daftar Kelas</h2>
    <a href="{{ route('kelas.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah Kelas</a>

    <table class="mt-4 w-full border-collapse border border-gray-300">
        <thead class="bg-gray-200">
            <tr>
                <th class="py-2 px-4 border">No</th>
                <th class="py-2 px-4 border">Nama Kelas</th>
                <th class="py-2 px-4 border">Wali Kelas</th>
                <th class="py-2 px-4 border">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kelas as $item)
            <tr>
                <td class="py-2 px-4 border">{{ $loop->iteration }}</td>
                <td class="py-2 px-4 border">{{ $item->nama_kelas }}</td>
                <td class="py-2 px-4 border">{{ $item->wali_kelas }}</td>
                <td class="py-2 px-4 border">
                    <a href="{{ route('kelas.edit', $item->id) }}" class="bg-yellow-500 text-white px-2 py-1 rounded">Edit</a>
                    <form action="{{ route('kelas.destroy', $item->id) }}" method="POST" class="inline">
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
