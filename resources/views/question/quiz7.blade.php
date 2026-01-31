@extends('common.main')

@section('content')
    {{-- これだけ！ --}}
    <P><a href="{{ url('/quiz6') }}">
            quiz6の画面にurl関数で移動する
        </a>
    </P>
    <p>
        <a href="{{ route('quiz6_test') }}">
            quiz6の画面にroute関数で移動する
        </a>
        {{-- ★ここに追加します！★ --}}
    <p>
        <a href="{{ url('/quiz9', $quiz->id) }}">
            quiz9の画面にurl関数で移動する
        </a>
    </p>
    <p>
    <a href="{{ route('quiz9_test', ['id' => $quiz->id]) }}">
        quiz9の画面にroute関数で移動する
    </a>
</p>
    </p>
    <form action="{{ url('/quiz9', $quiz->id) }}" method="get">
    @csrf
    <input type="text" name="dummy"> <button type="submit">送信ボタン</button>
</form>
@endsection