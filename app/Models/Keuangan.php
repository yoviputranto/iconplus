<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Keuangan extends Model
{
    use HasFactory;
    protected $table = 'keuangans';

    protected $fillable = ['id','judul','id_proyek','periode_awal','periode_akhir','dokumen'];

    public function proyek(){
        return $this->belongsTo(Proyek::class,'id_proyek','id');
    }

    public function getPeriodeAwalAttribute()
    {
        return Carbon::parse($this->attributes['periode_awal'])
            ->translatedFormat('F');
    }

    public function getPeriodeAkhirAttribute()
    {
        return Carbon::parse($this->attributes['periode_akhir'])
            ->translatedFormat('F');
    }

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])
            ->translatedFormat('d M Y');
    }
}
