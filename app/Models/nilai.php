<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class nilai extends Model
{
    protected $primaryKey = 'id_nilai';
    protected $table = 'nilai';
    protected $fillable = [
        'id_nilai', 'siswa_id', 'guru_id', 'mata_pelajaran_id','nilai'
    ];
    protected $hidden = [];
}