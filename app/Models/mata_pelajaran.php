<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class mata_pelajaran extends Model
{
    protected $primaryKey = 'id_pelajaran';
    protected $table = 'mata_pelajaran';
    protected $fillable = [
        'id_pelajaran', 'nama_pelajaran', 'deskripsi'
    ];
    protected $hidden = [];
}