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

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/admin/index.php">Панель администратора</a>
</nav>

    <h2>
<<<<<<< HEAD
        <?php echo $this->article->title; ?>
    </h2>
    <article>
        <?php echo $this->article->content; ?>
=======
        <?php echo $this->article[0]->title; ?>
    </h2>
    <article>
        <?php echo $this->article[0]->content; ?>
>>>>>>> +MagicMetodsTrait
    </article>
    <br>
<<<<<<< HEAD
    Автор: <?php echo $this->article->author->name; ?>
=======
    Автор: <?php echo $this->article[0]->author->name; ?>
>>>>>>> + App\Models\Authors, в шаблонах сделан вывод авторов
    <hr>
<<<<<<< HEAD
=======


    <a href="/admin.php?act=delete&id=<?php echo $this->article[0]->id; ?>">Удалить новость</a>
    <hr>

    Редактировать новость<br>
    <form action="/admin.php?id=<?php echo $this->article[0]->id; ?>&act=update" method="post">
        <label>
            <input type="text" placeholder="изменить заголовок" name="title">
        </label>
        <label>
            <input type="text" placeholder="изменить описание" name="content">
        </label>
        <input type="submit">
    </form>

>>>>>>> +MagicMetodsTrait
<a href="/"><button>Назад</button></a>

</body>
</html>
