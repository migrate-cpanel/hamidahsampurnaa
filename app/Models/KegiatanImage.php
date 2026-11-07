<?php

namespace App\Models;

use App\Models\KegiatanImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KegiatanImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'kegiatan_id',
        'image_path',
        'alt_text',
    ];
}