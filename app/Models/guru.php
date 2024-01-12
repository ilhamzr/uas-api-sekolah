<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class guru extends Model
{
    protected $primaryKey = 'id_guru';
    protected $table = 'guru';
    protected $fillable = [
        'id_guru', 'nama', 'tanggal_lahir','mata_pelajaran'
    ];
    protected $hidden = [];
}