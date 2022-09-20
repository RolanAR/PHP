<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Author_id extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'author_ids';
    protected $guarded = false;


}
