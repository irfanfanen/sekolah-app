@extends('layouts.app')

@section('content')
    <h2>Peringkat Siswa Berdasarkan Nilai</h2>
    <table class="min-w-full bg-white border border-gray-300">
        <thead>
            <tr>
                <th class="border px-4 py-2">Peringkat</th>
                <th class="border px-4 py-2">Nama Siswa</th>
                <th class="border px-4 py-2">Rata-rata Nilai</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($peringkatSiswa as $index => $siswa)
                <tr>
                    <td class="border px-4 py-2">{{ $index + 1 }}</td>
                    <td class="border px-4 py-2">{{ $siswa->siswa->nama }}</td>
                    <td class="border px-4 py-2">{{ number_format($siswa->rata_rata, 2) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
