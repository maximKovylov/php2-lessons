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
    <a class="navbar-brand" href="/admin/">Панель администратора</a>
</nav>

{% for article in articles %}
    <a href="/index.php?ctrl=Article&id={{ article.id }}">
        <h2>{{article.title }}</h2>
    </a>
    <p>
        {{ article.content }}
    </p>
    <p>
        Автор: {{ article.author.name }}
    </p>
    <hr>
{% endfor %}

</body>
</html>
