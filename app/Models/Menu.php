<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    // Tentukan nama tabel secara eksplisit (jika namanya berbeda dengan default Laravel)
    protected $table = 'menus';

    // Kolom yang dapat diisi
    protected $fillable = ['name', 'url'];

    // Nonaktifkan timestamp jika tidak digunakan
    public $timestamps = true;
}
