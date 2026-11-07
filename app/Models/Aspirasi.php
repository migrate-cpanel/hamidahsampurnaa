<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aspirasi extends Model
{
    use HasFactory;

    // Lindungi field agar tidak ada yang bisa diisi sembarangan
    protected $guarded = ['id'];
}
