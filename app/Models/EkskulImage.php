<?php

namespace App\Models;

use App\Models\Ekskul;
use App\Models\EkskulImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EkskulImage extends Model
{
    use HasFactory;

    protected $fillable = ['ekskul_id', 'image_path', 'alt_text'];

    // Satu Gambar dimiliki oleh satu Ekskul
    public function ekskul()
    {
        return $this->belongsTo(Ekskul::class);
    }
}