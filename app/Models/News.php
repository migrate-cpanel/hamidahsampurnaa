<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    // Mendefinisikan nama tabel secara eksplisit (opsional jika nama model = nama tabel)
    protected $table = 'news';

    // Kolom yang boleh diisi secara massal
    protected $fillable = [
        'title',
        'content',
        'image', 
        'slug',
        'short_description',
        'published_date',
        'author',
        'editor',
        'photographer',
        'idadmins', // Pastikan kolom ini ada di $fillable
    ];
}