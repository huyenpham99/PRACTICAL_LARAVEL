<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home(Request $request)
    {
        $books = Book::all();
        return view("home", [
            "books" => $books
        ]);
    }


}
