<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyek extends Model
{
    use HasFactory;
    protected $table = 'proyeks';
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;

    public function program(){
        return $this->belongsTo(Program::class,'id_program', 'id');
    }

    public function monitoring(){
        return $this->hasMany(Monitoring::class,'id_proyek','id');
    }

    public function keuangan(){
        return $this->hasMany(Keuangan::class,'id_proyek','id');
    }

    public function weekly(){
        return $this->hasMany(WeeklyReport::class,'id_proyek','id');
    }
}
