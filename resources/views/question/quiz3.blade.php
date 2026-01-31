<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <table border="1">
    <tr>
        <th>ID</th>
        <th>名前</th>
        <th>種別</th>
        <th>作成日時</th>
        <th>更新日時</th>
        {{-- 見出しの列を1つ追加します --}}
        <th>編集</th>
    </tr>

    @foreach($quizzes as $quiz)
    <tr>
        <td>{{ $quiz->id }}</td>
        <td>{{ $quiz->name }}</td>
        <td>{{ $quiz->type }}</td>
        <td>{{ $quiz->created_at }}</td>
        <td>{{ $quiz->updated_at }}</td>
        
        {{-- ★ここ！ @foreach の内側に書くことで、$quiz->id が正しく認識されます --}}
        <td>
            <a href="{{ url('quiz12/' . $quiz->id) }}">編集する</a>
        </td>
    </tr>
    @endforeach
</table>
</body>
</html>