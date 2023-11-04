<!DOCTYPE html>
<html>
<head>
    <title>ToDoアプリ</title>
    <!-- ここにCSSや他のヘッダー要素を追加する場所 -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> <!-- CSSファイルのパスに合わせて変更 -->
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>