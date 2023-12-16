<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengajar extends Model
{
    protected $table = "pengajars";
    protected $primarykey = "id";
    protected $fillable = ['id', 'nama'];

    public function course()
    {
        return $this->hasMany(Course::class);
    }

    public function alldata()
    {
    }

    public function DetailData($id)
    {
    }
}
