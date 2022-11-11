<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'book';

    protected $fillable = [
        'name',
        'author',
        'editorial',
        'publication_date',
        'type_id',
    ];

    public function type() {
        return $this->belongsTo(Type::class);
    }
}
