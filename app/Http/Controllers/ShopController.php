<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(string $slug = null) {

        return view('shop.index', [
            'books' => Book::paginate(15),
            'categories' => Category::all()
        ]);

    }
}
