<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $table = 'peminjaman';
    protected $primaryKey = 'id_pinjam';
    protected $fillable = [
        'id_peminjam',
        'id_buku',
        'tanggal_pinjam',
        'tanggal_kembali',
        'tanggal_kembali_actual',
        'denda'
    ];
    public function Siswa()
    {
        return $this->belongsTo(Siswa::class, 'id_peminjam');
    }
    public function Buku()
    {
        return $this->belongsTo(Buku::class, 'id_buku');
    }
}