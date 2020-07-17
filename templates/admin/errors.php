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

<article>
    <?php
    if (is_array($this->errors->showAll())) :
        foreach ($this->errors->showAll() as $exceptions) :
            foreach ($exceptions->showAll() as $exception) : ?>
            <p>
                <?php echo $exception->getMessage(); ?>
            </p>
        <?php
            endforeach;
        endforeach;
    endif;
    ?>
</article>

</body>
</html>