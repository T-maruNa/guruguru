<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth; 

class LoginController extends Controller
{

    // 独自でつくろうと思ったけど、
    // やっぱlaravelで提供されてるの使ってみる。
    // テーブルは独自。

    /*
    public function index() {
        var_dump("get");
        return view("login",  ["user_id" => ""]);
    }
    */
    /**
     * ログイン処理
     */
    /*
     public function login(Request $request)
    {
        $user_info = $request->validate([
            'user_id' => ['required'],
            'password' => ['required'],
        ]);

        // ログインに成功したとき
        if (Auth::attempt($user_info)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        // 上記のif文でログインに成功した人以外(=ログインに失敗した人)がここに来る
        return redirect()->back();
    }
    */
    /*
    public function login(Request $request) {
        // 入力値の取得
        $user_id = $request["user_id"];
        $password = $request["password"];
        $user_model = new User();
        // ユーザーの取得
        $user = $user_model->get_user($user_id);
        // パスワードの確認
        if(!$user ||  !password_verify($password, $user->password)){
            var_dump($user);
            var_dump($user_id,$password);
            var_dump("ログイン失敗");
            return view("login", ["user_id" => $user_id]);
        }
        
        // ログイン成功 ログインセッションの作成
        $request->session()->regenerate();
        // ユーザー情報を保存する
        $request->session()->put('users', $user);
        //$this->middleware('auth');
        return view("index", ["user_name" => $user->user_name]);
    }*/
}