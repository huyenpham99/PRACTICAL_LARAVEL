<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table = "authors";

    public $fillable = [
        "author_name",
    ];

}
