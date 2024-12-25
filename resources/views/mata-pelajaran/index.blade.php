@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
    <div class="bg-white shadow-md rounded-lg p-6">
        <h2 class="text-2xl font-semibold text-gray-800">Mata Pelajaran</h2>
        <a href="{{ route('mata-pelajaran.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mt-4 inline-block">Tambah</a>
        <table class="table-auto w-full mt-4">
            <thead>
                <tr>
                    <th class="border px-4 py-2">No</th>
                    <th class="border px-4 py-2">Nama Mapel</th>
                    {{-- <th class="border px-4 py-2">Kode Mapel</th> --}}
                    <th class="border px-4 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($mataPelajaran as $index => $mapel)
                <tr>
                    <td class="border px-4 py-2">{{ $index + 1 }}</td>
                    <td class="border px-4 py-2">{{ $mapel->nama }}</td>
                    {{-- <td class="border px-4 py-2">{{ $mapel->kode_mapel }}</td> --}}
                    <td class="border px-4 py-2">
                        <a href="{{ route('mata-pelajaran.edit', $mapel->id) }}" class="bg-yellow-500 text-white px-2 py-1 rounded">Edit</a>
                        <form action="{{ route('mata-pelajaran.destroy', $mapel->id) }}" method="POST" class="inline-block">
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
</div>
@endsection
