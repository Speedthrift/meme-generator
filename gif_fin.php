<!DOCTYPE html>
<html>
    <head>
        <title>
            Finding GIFs
        </title>
        <style>
            body, html
            {
                height: 100%;
                margin: 0;
            }
            .bg
            {
                background-image: url("..\\Images\\other\\pepe_bg3.jpg");
                height: 100%;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }
            .cls1
            {
                text-align: center;
                margin: auto;
                position: absolute;
                top: 0%;
                left: 30%;
                padding: 10px;
            }

            .button2 
            {
                background-color: white; 
                color: black; 
                border: 2px solid #008CBA;
                border-radius: 10px;
            }

            .button2:hover 
            {
                background-color: #008CBA;
                color: white;
            }
            .p3 
            {
                font-family: "Lucida Console" , "Courier New", monospace;
            }

        </style>

    </head>
    <body>
        <div class="bg">
        <a href=../webpage_home.html>
            <button class="button2">&larr; Main Menu</button>
        </a>
            <div class="cls1">
                <div class="p3">
                    <h2>Finding GIFs</h2>
                    <form action="gif_fin_suc.php" method=POST>
                        <label for="sgquery">Enter Keywords:</label><br>
                        <input type="text" id="sgquery" name="sgquery" value="" placeholder="(eg. hello wave)" size=30><br>
                        <input type="submit" value="Submit">
                    </form> 
                    <p> Click button to see gifs matching your search query parameters</p>
                </div>
            </div>
        </div>
    </body>
</html>