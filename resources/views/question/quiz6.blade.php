{{-- common/main.blade.phpを継承 --}}
@extends('common.main')

{{-- main.blade.php内の@yield('content')などの場所に流し込む --}}
@section('content')
    <div class="bg-danger-subtle p-3">
        @foreach($quizzes as $quiz)
            <div style="background-color: #f8d7da; border: 1px solid #ccc; margin-bottom: 10px; padding: 10px;">
                <p>ID : {{ $quiz->id }}</p>
                <p>名前 : {{ $quiz->name }}</p>
                <p>種別 : {{ $quiz->type }}</p>
                <p>作成日 : {{ $quiz->created_at }}</p>
                <p>更新日 : {{ $quiz->updated_at }}</p>
            </div>
        @endforeach
    </div>
@endsection