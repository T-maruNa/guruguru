<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

     /**
     * 主キー
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * ユーザーidをもとにユーザーの取得
     */
    public function get_user($user_id){
        $user = User::where('user_id', $user_id)->first();
        return $user;
    }
    
    /**
     * id,passを元にユーザー取得
     */
    /*
    public function get_user($user_id, $password){
        $user = User::where('user_id', $user_id)
            ->where('password', password_verify($password))
            ->first();
        return $user;
        //var_dump($user->user_name);
    }
    */
}
