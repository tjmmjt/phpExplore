<?php

// check to make sure user actually submitted the form to access page instead of entering script in url

// if post was made
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $birthDate = $_POST["birthDate"];

    try {
        // require database handler
        require_once "dbh.inc.php";
        // write insert query with placehoder values
        $query = "INSERT INTO family (first_name, last_name, birth_date) VALUES (?, ?, ?);";
        // prepared statement 
        $stmt = $pdo->prepare($query);
        // now give input date to query
        $stmt->execute([$firstName, $lastName, $birthDate]);

        // close out connection and send back to index page
        $pdo = null;
        $stmt = null;

        header("Location: ../index.php");

        die();
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
}
else {
    // send back to index page
    header("Location: ../index.php");
}