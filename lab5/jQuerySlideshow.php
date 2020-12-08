<!DOCTYPE html>
<html>
    <head>
        <title>jQuery Demonstration</title>
        <link rel="stylesheet" type="text/css" href="/style.css">
        <link rel="stylesheet" type="text/css" href="jQuerySlideshow.css">
    </head>
    <body>
        <div class="grid">
            <div class="navigation">
                <a href="/">Main Page</a>
            </div> <!--navigation-->
            <div class="main">
                <fieldset>
                    <legend><h2>jQuery Slideshow</h2></legend>
                    <p>Press the buttons below to cycle through some images. This combines simple JavaScript logic 
                        with the jQuery slideToggle() method.
                    </p>
                    <ul>
                        <li>.slideToggle() method for changing pictures</li>
                        <li>Click event handlers on both buttons</li>
                        <li>Mouseover and mouseleave event handlers for button animations</li>
                    </ul>
                    <button id="next-button">Next</button>
                    <button id="prev-button">Previous</button>
                    <br>
                    <div class="images-div">
                        <img class="slide-pic img1" src="/res/slideshow/1.jpg" alt="">
                        <img class="slide-pic img2" src="/res/slideshow/2.jpg" alt="">
                        <img class="slide-pic img3" src="/res/slideshow/3.jpg" alt="">
                        <img class="slide-pic img4" src="/res/slideshow/4.jpg" alt="">
                        <img class="slide-pic img5" src="/res/slideshow/5.jpg" alt="">
                    </div> <!--images-div-->
                </fieldset>
            </div> <!--main-->
        </div> <!--grid-->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="jQuerySlideshow.js"></script>
    </body>
</html>