<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = 'book';

    protected $fillable = [
        'cover',
        'title',
        'author',
        'description',
        'category',
    ];

    public function content()
    {
        return $this->hasMany(Content::class);
    }
}
