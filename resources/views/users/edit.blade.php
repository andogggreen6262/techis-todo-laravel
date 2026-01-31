<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>会員編集</title>
    <style>
        body { font-family: sans-serif; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .container { text-align: center; border: 1px solid #000; padding: 40px; width: 400px; }
        input { width: 100%; padding: 8px; margin-bottom: 15px; box-sizing: border-box; }
        button { width: 100%; padding: 10px; margin-bottom: 10px; cursor: pointer; border: 1px solid #000; display: block; width: 100%; }
        .btn-edit { background-color: #eee; }
        .btn-delete { background-color: #eee; }
    </style>
</head>
<body>
    <div class="container">
        <h2>会員編集 会員ID:1</h2>
        <form>
            <input type="text" name="name" value="テック太郎">
            <input type="text" name="phone" value="00000000000">
            <input type="email" name="email" value="test@techis.jp">
            
            <button type="button" class="btn-edit">編集</button>
            <button type="button" class="btn-delete">削除</button>
        </form>
    </div>
</body>
</html>