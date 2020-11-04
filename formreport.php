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
    </head>
    <body>
        <div class="grid">
            <div class="navigation">
                <a href="/">Main Page</a>
                <a href="index.html">Back</a>
            </div> <!--navigation-->
            <div class="SQLform">
                <form action="" name="form" method="POST">
                    <fieldset>
                        <legend>MySQL Data Entry</legend>
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
                    </fieldset>
                </form>
            </div> <!--default form-->
        </div> <!--grid-->
    </body>
</html>
<?php
} else {
echo "I'm gonna do a data entry!";
}