<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Carousel extends Model
{
    use HasFactory;
       /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'media',
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'carousels';

    /**
     * image
     *
     * @return Attribute
     */
    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn ($media) => url('/storage/carousels/' . $media),
        );
    }
}
