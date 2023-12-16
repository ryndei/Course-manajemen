<?php

namespace App\Models;

use App\Http\Middleware\Pengajar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    protected $table = 'courses';
    protected $fillable = [
        'id',
        'nama_kelas',
        'pengajars',
        'ruang',
        'hari',
        'jam',
        'harga',
        'jumlah_pertemuan',
        'deskripsi',
    ];


    public function pengajars()
    {
        return $this->belongsTo(Pengajar::class);
    }
    public function edulevel()
    {
        return $this->belongsTo(EduLevel::class, 'edu_level_id'); // Sesuaikan dengan nama model dan kolom kunci luar yang sesuai
    }
}
