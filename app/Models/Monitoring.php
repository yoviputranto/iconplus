<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monitoring extends Model
{
    use HasFactory;
    protected $table = 'monitorings';
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;
    public function proyek(){
        return $this->belongsTo(Proyek::class,'id_proyek','id');
    }
}
