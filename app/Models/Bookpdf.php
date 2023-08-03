<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookpdf extends Model
{
    use HasFactory;
    protected $table = 'bookpdf';

    protected $fillable = [
        'cover',
        'title',
        'slug',
        'category',
    ];
}
