<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>会員一覧</title>
    <style>
        body { font-family: sans-serif; margin: 40px; }
        h1 { text-align: center; }
        .container { max-width: 800px; margin: 0 auto; }
        .register-link { text-align: right; margin-bottom: 10px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #000; padding: 10px; text-align: left; }
        th { background-color: #f2f2f2; }
        .edit-link { text-align: center; }
    </style>
</head>
<body>
    <div class="container">
        <h1>会員一覧画面</h1>

        <div class="register-link">
            <a href="/users/create">>> 登録</a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>名前</th>
                    <th>電話番号</th>
                    <th>メールアドレス</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>テック太郎</td>
                    <td>00000000000</td>
                    <td>test@techis.jp</td>
                    <td class="edit-link"><a href="/users/edit">>> 編集</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>