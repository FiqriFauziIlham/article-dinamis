<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table = 'articles'; // Nama tabel
    protected $fillable = ['title', 'content']; // Kolom yang bisa diisi
}
