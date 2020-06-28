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
    <a class="navbar-brand" href="/admin/index.php">Панель администратора</a>
</nav>

<?php
foreach ($this->articles as $article) {
?>
<h2>
    <a href="/article.php?id=<?php echo $article->id; ?>">
        <?php echo $article->title; ?>
    </a>
</h2>
<article>
    <?php echo $article->content; ?>
</article>
<br>
    Автор: <?php echo $article->author->name; ?>
<hr>
<?php }; ?>

<<<<<<< HEAD
=======

Добавить новость
<form action="/admin.php?act=insert" method="post">
    <label>
        <input type="text" placeholder="заголовок" name="title">
    </label>
    <label>
        <input type="text" placeholder="описание" name="content">
    </label>
    <input type="submit">
</form>

>>>>>>> + App\Models\Authors, в шаблонах сделан вывод авторов
</body>
</html>
