<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class kelas extends Model
{
    protected $primaryKey = 'id_kelas';
    protected $table = 'kelas';
    protected $fillable = [
        'id_kelas', 'nama_kelas', 'tingkat'
    ];
    protected $hidden = [];
}