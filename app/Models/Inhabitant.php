<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inhabitant extends Model
{
    use HasFactory;

    protected $table = "inhabitants";
    protected $fillable = [
        'no_kk',
        'nik',
        'nama_lengkap',
        'jenis_kelamin',
        'tempat_lahir',
        'ttl',
        'golongan_darah',
        'alamat',
        'status_perkawinan',
        'pendidikan_terakhir',
        'status_pekerjaan',
    ];
}
