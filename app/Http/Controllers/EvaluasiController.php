<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use Illuminate\Http\Request;

class EvaluasiController extends Controller
{
    public function peringkatSiswa()
    {
        $peringkatSiswa = Nilai::query()
            ->select('siswa_id', 'mata_pelajaran_id', \DB::raw('avg(nilai) as rata_rata'))
            ->groupBy('siswa_id', 'mata_pelajaran_id')
            ->orderByDesc('rata_rata')
            ->get();

        return view('evaluasi.peringkat', compact('peringkatSiswa'));
    }

    public function siswaPerluPerhatian()
    {
        $siswaPerhatian = Nilai::query()
            ->where('nilai', '<', 60)
            ->get();

        return view('evaluasi.perhatian', compact('siswaPerhatian'));
    }
}

