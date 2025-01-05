<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
    //
    protected $fillable = [
        'book_id',
        'user_id',
        'return_date',
        'borrowed_date',
        'returned',
    ];
}
