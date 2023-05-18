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
    public function get_book_paginete($paginete_cnt, $type = null, $search = null){
        $query = new Book();
        // タイプ指定なし検索
        if (!is_null($type)) {
            $query = $query->where(function($query) use($type){
                $query->where('type', '=', $type);
            });
        }
        if (!is_null($search)) {
            $query = $query->where(function($query) use($search){
                $query = $query->where('title', 'LIKE', '%'. $search .'%')
                    ->orwhere('caption', 'LIKE', '%'. $search .'%');
                });
        } 
        $data = $query->paginate($paginete_cnt);
        
        return $data;
    }
}
