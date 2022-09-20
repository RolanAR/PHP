<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book_id extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'book_ids';
    protected $guarded = false;

    public function author()
    {
        return $this->belongsTo(Author_id::class, 'category', 'id');
    }
}
