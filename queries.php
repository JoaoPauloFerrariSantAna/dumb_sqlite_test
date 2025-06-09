<?php

require_once __DIR__ . "/./Database.php";

function insert_data(string $username): mixed
{
    $db = new Database("teste.db");

    $db->insert("user_tbl(username) VALUES('$username')");

    $data = $db->select("username FROM user_tbl WHERE username = '$username'");

    return $data["username"];
}