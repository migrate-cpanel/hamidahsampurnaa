<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logo extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // Tambahkan baris ini untuk mengizinkan semua kolom diisi
    // kecuali 'id'
    protected $guarded = ['id'];
}