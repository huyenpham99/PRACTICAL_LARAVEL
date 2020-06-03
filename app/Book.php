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
    public function get($key)
    {
        if (is_null($this->get($key)))
            return "default value";
        return $this->get($key);
    }

}
