<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<form action="/admin/index.php?ctrl=EditNews&id=<?php echo $_GET['id']; ?>" method="post">
    <label>
        <input type="text" placeholder="изменить заголовок" name="title">
    </label>
    <label>
        <input type="text" placeholder="изменить описание" name="content">
    </label>
    <label>
        <input type="text" placeholder="автор" name="author">
    </label>
    <input type="submit">
</form>

<a href="/admin/"><button>Назад</button></a>

</body>
</html>