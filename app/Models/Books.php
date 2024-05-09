<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;

    protected $table = 'books_tbl';

    protected $fillable = [
        'book_name',
        'author_name',
        'content',
        'front_img',
        'back_img'

    ];
}
