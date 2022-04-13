<?php require __DIR__ . "/database/continent_data.php"; ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Continent</title>
</head>
<body>
<form action="" method="POST">
    <label for="continent">Continent</label>
    <input type="text" name="continent">
    <input type="submit">
</form>
</body>
</html>

<?php

if ($_SERVER["REQUEST_METHOD"] === "POST"){
    // prevent xss scripting
    if (isset($_POST["continent"])){
        $continent = htmlspecialchars($_POST["continent"]);
        createContinent($continent);
    }
}