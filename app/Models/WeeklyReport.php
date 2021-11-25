<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeeklyReport extends Model
{
    use HasFactory;
    protected $table = 'weekly_reports';

    public function proyek(){
        return $this->belongsTo(Proyek::class,'id_proyek','id');
    }
}
