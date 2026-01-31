@extends('common.main')

@section('content')
    <h1>クイズ詳細画面（quiz9）</h1>

    {{-- コントローラーの find($id) で取得したデータを表示します --}}
    <p>ID：{{ $quiz->id }}</p>
    <p>名前：{{ $quiz->name }}</p>
    <p>種別：{{ $quiz->type }}</p>
    <p>作成日：{{ $quiz->created_at }}</p>
    {{-- ★ここを追記！★ --}}
    <p>更新日：{{ $quiz->updated_at }}</p>

    <hr>
    <a href="{{ url('/quiz7') }}">quiz7の画面に戻る</a>
@endsection