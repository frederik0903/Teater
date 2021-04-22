<?php

    require_once "database.php";

    $new_name = $mysqli->real_escape_string($_REQUEST['name']);
    $new_mail = $mysqli->real_escape_string($_REQUEST['mail']);
    $new_offer = $_REQUEST['offer'];


    $sql = "INSERT INTO nyhedsbrev (name, mail) VALUES ( ?, ?)";
    $stmt = mysqli_stmt_init($mysqli);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "SQL Statement Failed";
    } else {
        mysqli_stmt_bind_param($stmt, "ss", $new_name, $new_mail); // Check String and Integer
        mysqli_stmt_execute($stmt);
    }

    // Close connection
    $mysqli->close();

?>