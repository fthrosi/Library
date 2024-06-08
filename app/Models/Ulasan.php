<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ulasan extends Model
{
    use HasFactory;
    protected $table = 'ulasan';
    protected $primaryKey = 'id_ulasan';
    protected $fillable = [
        'id_siswa',
        'id_buku',
        'ulasan'
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
