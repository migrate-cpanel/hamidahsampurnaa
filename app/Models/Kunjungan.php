<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kunjungan extends Model
{
     use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'foto_kunjungan',
        'nama_kunjungan',
        'deskripsi_kunjungan',
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'kunjungan';

    /**
     * image
     *
     * @return Attribute
     */
    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn ($foto_kunjungan) => url('/storage/kunjungans/' . $foto_kunjungan),
        );
    }
}
