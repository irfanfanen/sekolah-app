<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $siswas = Siswa::all();
        return view('siswa.index', compact('siswas'));
    }

    public function create()
    {
        return view('siswa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nisn' => 'required|unique:siswa',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required',
            'kelas' => 'required',
            'email_orangtua' => 'required|email',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $siswa = new Siswa();
        $siswa->nama = $request->nama;
        $siswa->nisn = $request->nisn;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->tanggal_lahir = $request->tanggal_lahir;
        $siswa->alamat = $request->alamat;
        $siswa->kelas = $request->kelas;
        $siswa->email_orangtua = $request->email_orangtua;

        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('public/fotos');
            $siswa->foto = basename($path);
        }

        $siswa->save();
        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil ditambahkan.');
    }

    public function edit(Siswa $siswa)
    {
        return view('siswa.edit', compact('siswa'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'nisn' => 'required|unique:siswa,nisn,' . $id,
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required',
            'kelas' => 'required',
            'email_orangtua' => 'required|email',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $siswa = Siswa::findOrFail($id);
        $siswa->nama = $request->nama;
        $siswa->nisn = $request->nisn;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->tanggal_lahir = $request->tanggal_lahir;
        $siswa->alamat = $request->alamat;
        $siswa->kelas = $request->kelas;
        $siswa->email_orangtua = $request->email_orangtua;

        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('public/fotos');
            $siswa->foto = basename($path);
        }

        $siswa->save();
        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil diperbarui.');
    }

    public function destroy(Siswa $siswa)
    {
        $siswa->delete();
        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil dihapus.');
    }
}
