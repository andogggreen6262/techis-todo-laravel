<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <h1>クイズ第4問</h1> -->
<!-- <p>好きなフルーツは：{{ $fruits }} です！</p><body> -->
    @if($fruits == 'orange')
        <p>ミカンです！</p>
    @elseif($fruits == 'apple')
        <p>リンゴです！</p>
    @else
        <p>その他の果物です！</p>
    @endif
</body>
    
</body>
</html>