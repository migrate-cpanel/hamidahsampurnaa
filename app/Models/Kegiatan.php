<?php

namespace App\Models;

use App\Models\Kegiatan;
use App\Models\KegiatanImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kegiatan extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'full_description',
    ];

    public function images()
    {
        return $this->hasMany(KegiatanImage::class)->latest(); 
    }
}