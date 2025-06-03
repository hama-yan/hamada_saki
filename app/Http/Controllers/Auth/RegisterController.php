<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    // ユーザー登録フォームの表示
    public function showRegistrationForm()
    {
        return view('auth.register');
    }
    // ユーザー登録処理
    public function register(Request $request)
    {
        // バリデーションとユーザー作成処理を実装
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
        ]);

        // ユーザー作成
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        // ユーザーをログイン状態にする
        Auth::login($user);

        // ホームページへリダイレクト
        return redirect()->route('home')->with('success', 'ユーザー登録が完了しました。');

        // ダッシュボードなどへのリダイレクト
        return redirect()->route('dashboard');
    }


}
