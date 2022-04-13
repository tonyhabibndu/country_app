<?php require __DIR__ . "/database_connection.php";


function createCountry($name, $continent_id) {
    global $pdo;
    $sql = "INSERT INTO country (name, continent_id) VALUES (:name, :continent)";
    try {
        $statement = $pdo->prepare($sql);
        $statement->execute(["name" => $name, "continent" => $continent_id]);
    } catch (PDOException $exception) {
        die($exception->getMessage());
    }
}

function findAllCountries() {
    global $pdo;
    $sql = "SELECT * FROM country";
    try {
        $statement = $pdo->prepare($sql);
        $statement->execute();
        return $statement->fetchAll();
    } catch (PDOException $exception) {
        die($exception->getMessage());
    }
}

function findAllCountriesWithContinents(){
    global $pdo;
    $sql = "SELECT cou.name AS country_name, con.name AS continent_name FROM country AS cou INNER JOIN continent AS con ON cou.continent_id = con.id;";
    try {
        $statement = $pdo->prepare($sql);
        $statement->execute();
        return $statement->fetchAll();
    } catch (PDOException $exception){
        die($exception->getMessage());
    }
}
?>