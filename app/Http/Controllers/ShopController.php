<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(string $slug = null) {

        return view('shop.index', [
            'books' => Book::all()
        ]);

    }
}
