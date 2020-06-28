<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP-2</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>

    <h1>Товар "<?php echo $this->product->title; ?>"</h1>
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Наименование</th>
            <th>Цена</th>
        </tr>
        <tr>
            <td><?php echo $this->product->id; ?></td>
            <td>
                <a href="/index.php?ctrl=Product&id=<?php echo $this->product->id; ?>">
                    <?php echo $this->product->title; ?>
                </a>
            </td>
            <td><?php echo sprintf('%0.2f', $this->product->price); ?></td>
        </tr>
    </table>

</body>
</html>
