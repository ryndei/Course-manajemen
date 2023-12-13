<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    protected $table= 'courses';
    protected $fillable = [
        'id',
        'nama_kelas',
        'pengajar', 
        'ruang', 
        'hari', 
        'jam' ,
        'harga',
        'jumlah_pertemuan',
    ];
    public function edulevel()
    {
        return $this->belongsTo(EduLevel::class, 'edu_level_id'); // Sesuaikan dengan nama model dan kolom kunci luar yang sesuai
    }
}

