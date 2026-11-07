<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\StrukturOrganisasi;


class StrukturOrganisasi extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika berbeda dari 'struktur_organisasis'
    protected $table = 'struktur_organisasi';

    // Kolom yang boleh diisi secara massal
    protected $fillable = [
        'image',
    ];
}
