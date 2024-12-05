<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Makanan extends Model // Nama kelas menggunakan PascalCase
{
    use HasFactory;

    // Jika tabel bernama 'makanan' dan bukan default 'makanans', tambahkan properti berikut
    protected $table = 'makanan'; 

    protected $fillable = [
        'makanan',
        'harga',
        'image'
    ];
}
