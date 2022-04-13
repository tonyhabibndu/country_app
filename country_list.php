<?php require __DIR__ . "/database/country_data.php"?>
<?php $countries = findAllCountries(); ?>
<?php $countries_with_continents = findAllCountriesWithContinents(); ?>
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
    <title>Country List</title>
</head>
<body>
<h1>Countries with continent id</h1>
<ul>
    <?php foreach ($countries as $country) { ?>
        <li><?= $country["name"] . "  ------  " . $country["continent_id"]?></li>
    <?php } ?>
</ul>

<h1>Countries with continent name</h1>

<ul>
    <?php foreach ($countries_with_continents as $country) { ?>
        <li><?= $country["country_name"] . "  ------  " . $country["continent_name"]?></li>
    <?php } ?>
</ul>
</body>
</html>