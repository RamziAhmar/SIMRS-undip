<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Profile extends Model
{
    use HasFactory;

    protected $table = 'profiles';

    protected $fillable = [
        'nama_lengkap',
        'tanggal_lahir',
        'tempat_lahir',
        'alamat',
        'foto',
    ];

    public function users() {
        return $this->belongsTo(User::class);
    }
}
