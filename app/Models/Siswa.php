<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';

    protected $fillable = [
        'nama',
        'nisn',
        'jenis_kelamin',
        'tanggal_lahir',
        'alamat',
        'kelas',
        'email_orangtua',
        'foto',
    ];

    public function nilai()
    {
        return $this->hasMany(Nilai::class);
    }
}
