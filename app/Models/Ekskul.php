<?php

namespace App\Models;

use App\Models\Ekskul;
use App\Models\EkskulImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ekskul extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    // Satu Ekskul punya banyak Gambar
    public function images()
    {
        // Selalu urutkan gambar dari yang paling baru diupload
        return $this->hasMany(EkskulImage::class)->latest();
    }
}