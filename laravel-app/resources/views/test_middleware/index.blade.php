<html>

<head>
    <meta charset='utf-8'>
</head>

<body>
    <h1>ユーザー登録フォーム</h1>
    <form name="registform" action="/test_middleware/post" method="post">
        {{ csrf_field() }}

        年齢：<input type="text" name="age" size="10">

    </form>
</body>

</html>
