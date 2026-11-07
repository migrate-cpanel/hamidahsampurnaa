<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    use HasFactory;

    /**
     * Pastikan semua field dari form Anda ada di sini.
     */
    protected $fillable = [
        'title',
        'slug', // <-- TAMBAHKAN INI
        'short_description',
        'content',
        'image', // Pastikan 'image', bukan 'image_url'
        'published_date',
        'author',
        'editor',
        'photographer',
    ];
}