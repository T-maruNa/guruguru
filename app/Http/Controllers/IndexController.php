<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class IndexController extends Controller
{
    public function index() {
        // Requestインスタンスを作成
        $request = Request::capture();
        // クエリ文字列から値を取得
        $type = $request->query('type');
        $search = $request->query('search');
        
        $book_model = new Book();
        // 本取得
        $books = $book_model->get_book_paginete(10, $type, $search);
        // ページャーにパラメーター設定
        $books->appends(['type' => $type, 'search' => $search])->links();
        return view("index", ['books' => $books]);
    }
}