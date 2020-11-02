<?php
/*
 * Mitchell Vivian
 * 300202471
 */
if (filter_input(INPUT_GET, 'name')) {
    $name = filter_input(INPUT_POST, 'name');
    $message = filter_input(INPUT_POST, 'message');
    echo "Hello, $name!";
    echo "You entered $message";
}
else {
    ?>
<html>
    <head>
        <title>Simple Form</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="get form">
            <form method="GET" action="">
                <fieldset>
                    <legend>GET Form</legend>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" placeholder="Deb" required>
                    <br>
                    <label for="message">Message:</label>
                    <input type="text" id="message" name="message" placeholder="ALIENS" required>
                    <br><br>
                    <input type="submit" value="Submit">
                </fieldset>
            </form>
        </div> <!--get form-->
    </body>
</html>
<?php
}