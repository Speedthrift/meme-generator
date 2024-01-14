<!DOCTYPE html>
<html>
    <head>
        <title>
            Finding GIFs
        </title>
        <link rel="stylesheet" href="style_css.css">
        <style>
            .bg
            {
                background-image: url("..\\Images\\other\\pepe_bg3.jpg");
                height: 100%;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }
        </style>
    </head>
    <body>
        <div class="bg">
        <a href=../webpage_home.html>
            <button class="button">&larr; Main Menu</button>
        </a>
            <div class="cls1">
                <div class="p3">
                    <h2>Finding GIFs</h2>
                    <form action="gif_fin_suc.php" method=POST>
                        <label for="sgquery">Enter Keywords:</label><br>
                        <input type="text" id="sgquery" name="sgquery" value="" placeholder="(eg. hello wave)" size=30><br>
                        <input class="button8" type="submit" value="Submit">
                    </form> 
                    <p> Click button to see gifs matching your search query parameters</p>
                </div>
            </div>
        </div>
    </body>
</html>
