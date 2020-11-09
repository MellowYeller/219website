<?php
/* 
 * Mitchell Vivian
 * 300202471
 */
if (!filter_input(INPUT_POST, 'fname')) {
?>
<html>
    <head>
        <title>MySQL Form</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="formreport.css">
    </head>
    <body>
        <div class="grid">
            <div class="navigation">
                <a href="/">Main Page</a>
                <a href="index.html">Back</a>
            </div> <!--navigation-->
            <div class="form">
                <fieldset>
                    <form action="" name="form" method="POST">
                        <legend><h2>MySQL Data Entry</h2></legend>
                        <p>Data entered here will be fed to a MySQL database. The entire table of entries will be printed on successful entry.</p>
                        <label for="fname">First name:</label> <br>
                        <input type="text" id="fname" name="fname" required>
                        <br><br>
                        <label for="lname">Last name:</label> <br>
                        <input type="text" id="lname" name="lname" required>
                        <br><br>
                        <label for="email">Email:</label> <br>
                        <input type="email" id="email" name="email" required>
                        <br><br>
                        <input type="submit" value="Submit">
                        <a href="reportalldata.php"><button type="button">Show Table</button></a>

                    </form>
                </fieldset>
            </div> <!--default form-->
        </div> <!--grid-->
    </body>
</html>
<?php
} else {
    $fname = filter_input(INPUT_POST, 'fname');
    $lname = filter_input(INPUT_POST, 'lname');
    $email = filter_input(INPUT_POST, 'email');

    $mysqli = new mysqli("localhost", "219user", "r&e!4S2!u@8", "219website");

    $message;
    if ($mysqli->connect_errno) {
        $message = "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error . "\n";
    }
    if (!($stmt = $mysqli->prepare("INSERT INTO simple_entry VALUES(?, ?, ?)"))) {
        $message = "Prepare failed (" . $mysqli->errno . ") " . $mysqli->error . "\n";
    }
    if (!($stmt->bind_param("sss", $fname, $lname, $email))) {
        $message = "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error . "\n";
    }
    if (!$stmt->execute()) {
        $message = "Execute failed: (" . $stmt->errno . ") " . $stmt->error . "\n";
    } else {
        $message = "A new entry has been entered to the database.\n\nValues:\nFirst Name: $fname\nLast Name: $lname\nEmail: $email";
    }

    $query = "SELECT * FROM simple_entry";
    $res = $mysqli->query($query);

?>
<!doctype html>
<html>
    <head>
        <title>MySQL Form</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="formreport.css">
    </head>
    <body>
        <div class="grid">
            <div class="navigation">
                <a href="/">Main Page</a>
                <a href="formreport.php">Back</a>
            </div> <!--navigation-->
            <div class="main">
                <p><?php echo nl2br($message); ?></p>
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
<?php
}