<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class siswa extends Model
{
    protected $primaryKey = 'id_siswa';
    protected $table = 'siswa';
    protected $fillable = [
        'id_siswa', 'nama', 'tanggal_lahir', 'alamat','kelas_id'
    ];
    protected $hidden = [];
}