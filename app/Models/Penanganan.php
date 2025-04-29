<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penanganan extends Model
{
    use HasFactory;

    protected $table = 'penanganans';

    protected $fillable = [
        'id_pendaftaran',
        'id_user',
        'waktu_penanganan',
        'keterangan',
        'tindakan',
        'resep_obat',
        'waktu_tindak_lanjut',
        'keterangan_tindak_lanjut',
    ];
}
