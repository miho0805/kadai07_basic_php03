<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c&display=swap" rel="stylesheet">

    <title>送信画面</title>
</head>



<body class="row m-plus-rounded-1c-regular">


   <h1>📨お問い合わせフォーム📨</h1>

    <form action="write2.php" method="post">
       名前<br>
       <input type="text" name="name"><br>
       Email<br>
       <input type="text" name="email"><br>
        備考<br>
        <textarea name="memo" cols="30" rows="10"> </textarea><br>
        <button type="submit">送信</button>
    </form>
</body>
</html>