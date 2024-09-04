<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portos extends Model
{
    use HasFactory; 
    protected $table = "portos";
    protected $fillable = [
        'gambar',
        'judul',
        'deskripsi',
    ];
}
