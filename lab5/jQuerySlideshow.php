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
                    <legend><h2>jQuery Slideshow</h2></legend>
                    <p>Press the buttons below to cycle through some images.</p>
                    <button id="next-button">Next</button>
                    <img class="slide-pic" src="/res/slideshow/1.jpg" alt="">
                    <img class="slide-pic" src="/res/slideshow/2.jpg" alt="">
                    <img class="slide-pic" src="/res/slideshow/3.jpg" alt="">
                    <img class="slide-pic" src="/res/slideshow/4.jpg" alt="">
                    <img class="slide-pic" src="/res/slideshow/5.jpg" alt="">
                </fieldset>
            </div> <!--main-->
        </div> <!--grid-->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="jQuerySlideshow.js"></script>
    </body>
</html>