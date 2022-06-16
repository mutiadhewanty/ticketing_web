<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookPlace extends Model
{
    use HasFactory;
    // protected $table = "book_places";
    protected $guarded = ['id', 'total_harga'];
}
