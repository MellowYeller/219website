<?php
/*
 * Mitchell Vivian
 * 300202471
*/ 

    $mysqli = new mysqli("localhost", "219user", "r&e!4S2!u@8", "219website");

    $message;
    if ($mysqli->connect_errno) {
        $message = "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error . "\n";
    }

    $query = "SELECT * FROM simple_entry";
    $res = $mysqli->query($query);

?>
<!doctype html>
<html>
    <head>
        <title>MySQL Form</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="reportalldata.css">
    </head>
    <body>
        <div class="grid">
            <div class="navigation">
                <a href="/">Main Page</a>
                <a href="formreport.php">Back</a>
            </div> <!--navigation-->
            <div class="main">
                <h2>Database Entries</h2>
                <p>Below is a table of all data entered to the MySQL database so far.</p>
                <table>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                    </tr>
                    <?php
                        // Print a table row for each row in the simple_entry table.
                        while ($row = $res->fetch_assoc()) {
                            printf("<tr><td>%s</td><td>%s</td><td>%s</td></tr>", $row["fname"], $row["lname"], $row["email"]);
                        }
                        echo "<br>";
                    ?>
                </table>
            </div> <!--main-->
        </div> <!--grid-->
    </body>
</html>