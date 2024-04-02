<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Family</title>
</head>
<body>
    <?php
    // Include the database connection file
    include_once("config.php");

    // if connect fails, kill connection and display error number and error message
    if( !$connect )
    {
        die("ERROR: cannot connect to database $db on server $server using username $user (".mysqli_connect_errno().", ".mysqli_connect_error().")");
    }

    // initialize variables 
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $birthDate = $_POST['birthDate'];

    // query
    $userQuery = "
        INSERT INTO family (first_name, last_name, birth_date)
        VALUES ('$firstName', '$lastName', '$birthDate');
    ";

    $result = mysqli_query($connect, $userQuery);

    if( !$result )
    {
        die("Could not successfully run query ($userQuery) from $db: " .mysqli_error($connect) );
    }
    else
    {
        print(" <h1>ADD A NEW FAMILY MEMBER</h1>");
        print("<p>The following record was added to the family table:</p>");
        print("
            <table border='0'>
                <tr><td>FIRST NAME</td><td>$firstName</td></tr>
                <tr><td>LAST NAME</td><td>$lastName</td></tr>
                <tr><td>BIRTH DATE</td><td>$birthDate</td></tr>
            </table>
        ");
    }

    mysqli_close($connect);  // close the connection
    ?>

</body>
</html>