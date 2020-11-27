<!DOCTYPE html>
<html>
    <head>
        <title>jQuery Demonstration</title>
        <link rel="stylesheet" type="text/css" href="/style.css">
        <link rel="stylesheet" type="text/css" href="jQueryDemo.css">
    </head>
    <body>
        <div class="grid">
            <div class="navigation">
                <a href="/">Main Page</a>
            </div> <!--navigation-->
            <div class="main">
                <fieldset>
                    <legend><h2>jQuery Demo</h2></legend>
                    <p>Press the button below to view a jQuery animation.</p>
                    <button id="cat-button">Toggle Cat</button>
                    <img class="cat-picture" src="/res/avery.jpg" alt="My cat Avery!">
                </fieldset>
            </div> <!--main-->
        </div> <!--grid-->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="jQueryDemo.js"></script>
    </body>
</html>