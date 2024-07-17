<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'tbl_books';

    protected $fillable = [
        'name',
        'autor',
        'release',
        'quantity',
        'active',
    ];

    protected $casts = [
        'active' => 'boolean',
    ];
}
