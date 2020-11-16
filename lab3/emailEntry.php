<?php
/*
 * Mitchell Vivian
 * 300202471
 */ 

if (filter_input(INPUT_POST, "email")) {
    $email = filter_input(INPUT_POST, 'email');

    $mysqli = new mysqli("localhost", "219user", "r&e!4S2!u@8", "219website");

    $message;
    if ($mysqli->connect_errno) {
        $message = "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error . "\n";
    }
    if (!($stmt = $mysqli->prepare("INSERT INTO emails VALUES(?)"))) {
        $message = "Prepare failed (" . $mysqli->errno . ") " . $mysqli->error . "\n";
    }
    if (!($stmt->bind_param("s", $email))) {
        $message = "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error . "\n";
    }
    if (!$stmt->execute()) {
        $message = "Execute failed: (" . $stmt->errno . ") " . $stmt->error . "\n";
    } else {
        $message = "A new entry has been entered to the database.\n\nValues:\n\nEmail: $email";
    }
}