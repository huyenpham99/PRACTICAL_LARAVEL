<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = "books";
    public $fillable = [
        "title",
        "ISBN",
        "pub_year",
        "available",
        "authorid",
    ];
}
