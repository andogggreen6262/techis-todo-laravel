<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>会員登録</title>
    <style>
        body { font-family: sans-serif; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .container { text-align: center; border: 1px solid #000; padding: 40px; width: 400px; }
        input { width: 100%; padding: 8px; margin-bottom: 15px; box-sizing: border-box; }
        button { width: 100%; padding: 10px; background-color: #eee; border: 1px solid #000; cursor: pointer; }
    </style>
</head>
<body>
    <div class="container">
        <h2>会員登録</h2>
        <form>
            <input type="text" name="name" placeholder="名前">
            <input type="text" name="phone" placeholder="電話番号">
            <input type="email" name="email" placeholder="メールアドレス">
            <button type="button">登録</button>
        </form>
    </div>
</body>
</html>