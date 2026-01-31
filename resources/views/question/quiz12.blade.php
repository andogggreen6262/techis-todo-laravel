@extends('common.main')

@section('content')
    <h1>クイズ更新画面</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- formのactionにクイズのIDを含めるのがポイントです --}}
    <form action="{{ route('quiz12_test2', $quiz->id) }}" method="post">
        @csrf
        <p>名前を入力：<input type="text" name="name" value="{{ $quiz->name }}"></p>
        <p>数値を入力：<input type="text" name="number" value="{{ $quiz->type }}"></p>
        
        <button type="submit">更新ボタン</button>
    </form>
@endsection