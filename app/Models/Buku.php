<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = 'buku';
    protected $primaryKey = 'id_buku';
    protected $fillable = [
        'kode_buku',
        'nama_buku',
        'penerbit',
        'penulis',
        'sinopsis',
        'rak',
        'stok_buku',
        'foto_buku',
    ];
}
