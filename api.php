<?php

$pdo = new PDO('mysql:host=localhost;dbname=ads_db','root', 'root');

$query = $pdo -> prepare('INSERT INTO test (id) value (:id)');
$query -> bindValue(':id', 1);
$query -> execute();

if (isset($_GET['all'])) {
    echo 'Все объявления';
}

else if (isset($_GET['add'])) {
    echo 'Добавить объяление';
}

else if (isset($_GET['id'])) {
    echo 'Показать объявление';
}

else if (isset($_GET['test'])) {
    echo 'Переданное значение в test -> ' . $_GET['test'];
}