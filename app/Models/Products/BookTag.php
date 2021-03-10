<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookTag extends Model
{
    use HasFactory;

    protected $fillable = [
      'name',
      'book_id'
    ];

    /*
     *  The relational methods
     *  The book that's tagged
     */
    public function books()
    {
        return $this->belongsTo(Book::class, 'book_id');
    }
}
