<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IntegrasiTeknologi extends Model
{
    use HasFactory;

    protected $table = 'integrasi_teknologis';

    protected $fillable = [
        'title',
        'slug',
        'short_description',
        'content',
        'image',
        'published_date',
        'author',
        'editor',
        'photographer',
    ];
}
