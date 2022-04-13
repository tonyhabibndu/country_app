<?php require __DIR__ . "/database/continent_data.php"; ?>
<?php $continents = findAllContinents(); ?>
<?php $continents_with_a = findContinentsStartsWithA(); ?>


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
    <title>Continent List</title>
</head>
<body>
<h1>All Continents</h1>

<ul>
    <?php foreach ($continents as $continent) { ?>
        <li><?= $continent["name"] ?></li>
    <?php } ?>
</ul>

<h1>Continents that start with A</h1>

<ul>
    <?php foreach ($continents_with_a as $continent) { ?>
        <li><?= $continent["name"] ?></li>
    <?php } ?>
</ul>

</body>
</html>
