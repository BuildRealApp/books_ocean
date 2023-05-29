<?php

namespace App\Http\Controllers;


use App\Models\Book;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home.index', [
            'lastBooks' => Book::latest()->take(5)->get()
        ]);
    }
}
