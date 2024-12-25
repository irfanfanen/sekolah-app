<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use App\Models\Siswa;
use App\Models\MataPelajaran;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index()
    {
        $nilais = Nilai::with(['siswa', 'mataPelajaran'])->get();
        return view('nilai.index', compact('nilais'));
    }

    public function create()
    {
        $siswas = Siswa::all();
        $mataPelajarans = MataPelajaran::all();
        return view('nilai.create', compact('siswas', 'mataPelajarans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'siswa_id' => 'required',
            'mata_pelajaran_id' => 'required',
            'nilai' => 'required|integer',
        ]);

        Nilai::create($request->all());
        return redirect()->route('nilai.index')->with('success', 'Nilai berhasil ditambahkan.');
    }

    public function edit(Nilai $nilai)
    {
        $siswas = Siswa::all();
        $mataPelajarans = MataPelajaran::all();
        return view('nilai.edit', compact('nilai', 'siswas', 'mataPelajarans'));
    }

    public function update(Request $request, Nilai $nilai)
    {
        $request->validate([
            'siswa_id' => 'required',
            'mata_pelajaran_id' => 'required',
            'nilai' => 'required|integer',
        ]);

        $nilai->update($request->all());
        return redirect()->route('nilai.index')->with('success', 'Nilai berhasil diperbarui.');
    }

    public function destroy(Nilai $nilai)
    {
        $nilai->delete();
        return redirect()->route('nilai.index')->with('success', 'Nilai berhasil dihapus.');
    }
}
