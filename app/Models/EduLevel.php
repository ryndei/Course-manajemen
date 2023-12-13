<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EduLevel extends Model
{
    public function edulevel()
    {
        return $this->belongsTo(EduLevel::class, 'edu_level_id');
    }
}
