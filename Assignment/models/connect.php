<?php
function connect($query)
{
    $connection = new PDO("mysql:host=localhost;dbname=wd18343", "root", "");
    $stmt = $connection->prepare($query);
    $stmt->execute();
    return $stmt;
}

function getOne($query)
{
    $result = connect($query)->fetch();
    return $result;
}

function getAll($query)
{
    $result = connect($query)->fetchAll();
    return $result;
}
