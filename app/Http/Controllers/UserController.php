<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // 一覧画面を表示する命令
    public function index()
    {
        return view('users.index');
    }

    // 登録画面を表示する命令
    public function create()
    {
        return view('users.create');
    }

    // 編集画面を表示する命令
    public function edit()
    {
        return view('users.edit');
    }
}
