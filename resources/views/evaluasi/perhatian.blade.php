<!-- resources/views/evaluasi/perhatian.blade.php -->
@extends('layouts.app')

@section('content')
    <h2>Siswa yang Memerlukan Perhatian</h2>
    <table class="min-w-full bg-white border border-gray-300">
        <thead>
            <tr>
                <th class="border px-4 py-2">Nama Siswa</th>
                <th class="border px-4 py-2">Nilai</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($siswaPerhatian as $siswa)
                <tr>
                    <td class="border px-4 py-2">{{ $siswa->siswa->nama }}</td>
                    <td class="border px-4 py-2">{{ $siswa->nilai }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
