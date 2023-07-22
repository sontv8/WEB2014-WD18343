<?php
function connect($query)
{
    $connection = new PDO("mysql:host=localhost;dbname=we18343", "root", "");
    $stmt = $connection->prepare($query);
    $stmt->execute();
    return $stmt;
}
function getAll($query)
{
    $result = connect($query)->fetchAll();
    // var_dump($result);
    return $result;
}
function getOne($query)
{
    $result = connect($query)->fetch();
    return $result;
}
