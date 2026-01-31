@extends('common.main')

@section('content')
   

    {{-- ★エラーメッセージの表示エリアを追加 --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
 <h1>クイズ登録画面</h1>
    <form action="{{ route('quiz10_test2') }}" method="post">
        @csrf
        {{-- inputタグのname属性がControllerの設定（name, number）と合っているか確認 --}}
        <p>名前を入力：<input type="text" name="name"></p>
        <p>数値を入力：<input type="text" name="number"></p>
        
        <button type="submit">送信ボタン</button>
    </form>
@endsection