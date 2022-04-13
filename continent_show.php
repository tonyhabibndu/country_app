<?php require __DIR__ . "/database/continent_data.php"; ?>
<?php $continent = findContinentByName("Asia"); ?>
<?php
function dump($el){
    print "<pre>";
    print_r($el);
    print "</pre>";
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Continent Show</title>
</head>
<body>
<h1><?= $continent["name"] ?></h1>
</body>
</html>