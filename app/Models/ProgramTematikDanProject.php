<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramTematikDanProject extends Model
{
      use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'foto_program',
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'program_tematik_dan_projects';

    /**
     * image
     *
     * @return Attribute
     */
    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn ($foto_program) => url('/storage/programs/' . $foto_program),
        );
    }
}
