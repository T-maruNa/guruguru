<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

     /**
     * 主キー
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Bookをページネート取得
     */
    public function get_book_paginete($paginete_cnt){
        $data = Book::paginate($paginete_cnt);
        return $data;
    }
}
