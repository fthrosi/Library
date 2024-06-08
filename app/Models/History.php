<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $table = 'history';
    protected $primaryKey = 'id_history';
    protected $fillable = [
        'id_siswa',
        'id_buku',
        'tanggal_kembali',
    ];
    public function Siswa()
    {
        return $this->belongsTo(Siswa::class, 'id_siswa');
    }
    public function Buku()
    {
        return $this->belongsTo(Buku::class, 'id_buku');
    }
}