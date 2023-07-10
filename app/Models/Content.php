<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Content extends Model
{
    use HasFactory;

    protected $table = 'content';

    protected $fillable = [
        'book_id',
        'audio',
        'book_content',
        'page'
    ];

    public function book(): BelongsTo
    {
        return $this->belongsTo(Book::class);
    }
}
