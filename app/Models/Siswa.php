<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    // ...
    protected $fillable = [
        'id',
        'nama',
        'alamat',
        'jenkel',
        'email',
        'no_telepon',
        'bukti_pembayaran',
        'kelas',
    ];

    public function edulevel()
    {
        return $this->belongsTo(EduLevel::class, 'edu_level_id'); // Sesuaikan dengan nama model dan kolom kunci luar yang sesuai
    }
}
