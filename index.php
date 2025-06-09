<?php

require_once __DIR__ . "/./queries.php";

$info = " ";

if (isset($_POST["username"])) {
    $info = insert_data($_POST["username"]);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <input type="text" name="username" id="username">
        <button type="submit">Send</button>
    </form>
    <?= $info ?>
</body>

</html>