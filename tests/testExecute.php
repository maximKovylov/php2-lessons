<?php
require __DIR__ . '/../autoload.php';

$db = new Db();
$sql = "UPDATE products SET title=:title WHERE id=:id";
$db->execute($sql, [':id' => 3, ':title' => 'Масло']);

