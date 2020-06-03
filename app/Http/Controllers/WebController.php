<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home()
    {
        $books = Book::all();
        return view("home", [
            "books" => $books,
        ]);
    }
    public function newBrand()
    {
        return view("new");
    }

}
