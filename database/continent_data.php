<?php require __DIR__ . "/database_connection.php";


function createContinent($name){
    global $pdo;
    $sql = "INSERT INTO continent (name) VALUES (:name)";
    try {
        $statement = $pdo->prepare($sql);
        $statement->execute(["name" => $name]);
    } catch (PDOException $exception) {
        die($exception->getMessage());
    }
}

function findAllContinents() {
    global $pdo;
    $sql = "SELECT * FROM continent";
    try {
        $statement = $pdo->prepare($sql);
        $statement->execute();
        return $statement->fetchAll();
    } catch (PDOException $PDOException) {
        die($PDOException->getMessage());
    }
}

function findContinentsStartsWithA() {
    global $pdo;
    $sql = "SELECT * FROM continent WHERE name LIKE 'A%'";
    try {
        $statement = $pdo->prepare($sql);
        $statement->execute();
        return $statement->fetchAll();
    } catch (PDOException $PDOException) {
        die($PDOException->getMessage());
    }
}

function findContinentByName($name) {
    global $pdo;
    $sql = "SELECT * FROM continent WHERE name = :name";
    try {
        $statement = $pdo->prepare($sql);
        $statement->execute(["name" => $name]);
        return $statement->fetch();
    } catch (PDOException $exception) {
        die($exception->getMessage());
    }
}