<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class IndexController extends Controller
{
    public function index() {
        $book_model = new Book();
        // 本取得
        $books = $book_model->get_book_paginete(10);
        return view("index", ['books' => $books]);
    }
}