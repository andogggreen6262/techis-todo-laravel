<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// ↓ データを取得するためにモデルの宣言を追加します
use App\Models\Quiz; 

use Illuminate\Support\Facades\Auth;
use App\Models\Company; // 冒頭に追記
use App\Models\Sale;    // 冒頭に追記


class QuizController extends Controller
{
    // 既存のメソッド（そのまま残します）
    public function index()
    {
        return view('question.quiz2');
    }

    //  ここから追記：今回の指示内容
    public function show() 
    {
        // ① Quizzesテーブルからデータを抽出する
        $quizzes = Quiz::get();

        // ② データをquiz3.blade.phpで利用できるように引数に入れて送る
        return view('question.quiz3', compact('quizzes'));
    }

 //  ここから追記：今回の指示内容
    public function quiz4_show()
{
    // ① 変数を定義する
    $fruits = "orange";

    // ② Viewを表示しつつ、compact関数を使って変数を引き渡す
    return view('question.quiz4', compact('fruits'));
}

 //  ここから追記：今回の指示内容
    public function login(Request $request){
    //セッションの削除
    $request->session()->flush();
    //ログインユーザーの設定
    $user_info = array(
        'email' => 'techis@test',
        'password' => '1234',
    );
    //ログインチェック
    if (Auth::attempt($user_info)){
        //ログインに成功
        return view('question.quiz5');

    }
    //ログインに失敗
    return view('question.quiz5');
    }

    //
    public function quiz6_show() {
    // Quizテーブルから全データを取得
    $quizzes = Quiz::all(); 

    // questionフォルダ内のquiz6.blade.phpを開き、変数$quizzesを渡す
    return view('question.quiz6', compact('quizzes'));

}



// app/Http/Controllers/QuizController.php 内に追記

public function quiz8_redirect() {
    // quiz7 のページへリダイレクト（転送）させる
    // ここでは view() ではなく redirect() を使うのがポイント！
    return redirect('/quiz7');
}

// QuizController.php

// QuizController.php

// 1. quiz7の画面を表示するための関数（ここで $quiz を準備する）
public function quiz7_show() {
    $quiz = Quiz::first(); // 最初の1件を取得
    return view('question.quiz7', compact('quiz')); // Bladeに渡す
}

// 2. quiz9の画面を表示するための関数（移動先で動く関数）★ここが足りないはず！
public function quiz9_show($id) {
    // URLのパラメータから受け取った $id を使って検索する
    $quiz = Quiz::find($id); 
    
    // quiz9.blade.php を表示する
    return view('question.quiz9', compact('quiz'));
}

// 画面を表示させる関数
public function quiz10_show() {
    return view('question.quiz10');
}




public function quiz10_store(Request $request) {
    // 1. バリデーション（入力チェック）
    $request->validate([
        'name' => 'required|max:30', // 必須、最大30文字
        'number' => 'required',      // 必須（Bladeのname属性がnumberの場合）
    ]);

    // 2. Quizテーブルへの登録処理
    Quiz::create([
        'name' => $request->name,
        'type' => $request->number, // Bladeでname="number"としている値をtypeカラムへ
    ]);

    // 3. クイズ登録画面にリダイレクト
    return redirect()->route('quiz10_test');
}
public function quiz11_show_all() {
    // 全件取得
    $companies = Company::all();
    $sales = Sale::all();
    
    return view('question.quiz11', compact('companies', 'sales'));
}
public function quiz11_show_get() {
    // 1. Companiesテーブルの抽出
    // founding_date に「-03-」を含み、かつ address に「テスト２」を含む
    $companies = Company::where('founding_date', 'LIKE', '%-03-%')
        ->where('address', 'LIKE', 'テスト２%')
        ->get();

    // 2. Salesテーブルの抽出
    // company_id が 2、または sales が 8000より大きいものを、売上順（降順）で並び替え
    $sales = Sale::where('company_id', 2)
        ->orWhere('sales', '>', 8000)
        ->orderBy('sales', 'desc')
        ->get();

    return view('question.quiz11', compact('companies', 'sales'));
}
// 更新画面を表示する
public function quiz12_show($id) {
    // 指定されたIDのデータを1件取得
    $quiz = Quiz::findOrFail($id);
    return view('question.quiz12', compact('quiz'));
}

// 実際にデータを書き換える
public function quiz12_update(Request $request, $id) {
    // 1. バリデーション
    $request->validate([
        'name' => 'required|max:30',
        'number' => 'required',
    ]);

    // 2. 更新対象を検索
    $quiz = Quiz::findOrFail($id);

    // 3. update関数で書き換え
    $quiz->update([
        'name' => $request->name,
        'type' => $request->number,
    ]);

    // 4. 一覧画面（quiz3）へリダイレクト
    return redirect('/quiz3');
}
}