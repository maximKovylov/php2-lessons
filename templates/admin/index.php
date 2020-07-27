<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Главная</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">Выйти из панели администратора</a>
</nav>

<table border="1">
    <tr>
        <th>Номер</th>
        <th>Заголовок</th>
        <th>Текст</th>
        <th>Автор</th>
        <th>Действия</th>
    </tr>

    <?php foreach ($data as $datum) : ?>
    <tr>
        <td>
            <?php echo $datum['id']; ?>
        </td>
        <td>
            <?php echo $datum['title']; ?>
        </td>
        <td>
            <?php echo $datum['content']; ?>
        </td>
        <td>
            <?php echo $datum['author']; ?>
        </td>
        <td>
            <a href="/templates/admin/edit.php?id=<?php echo $datum['id']; ?>">Редактировать</a><br>
            <a href="/admin/index.php?ctrl=DeleteNews&id=<?php echo $datum['id']; ?>">Удалить</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

Добавить новость
<form action="/admin/index.php?ctrl=AddNews" method="post">
    <label>
        <input type="text" placeholder="заголовок" name="title">
    </label>
    <label>
        <input type="text" placeholder="описание" name="content">
    </label>
    <label>
        <input type="text" placeholder="автор" name="name">
    </label>
    <input type="submit">
</form>

</body>
</html>
