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
            .button
            {
                border: none;
                color: white;
                padding: 16px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                transition-duration: 0.4s;
                cursor: pointer;
                top:0%;
                left: 0%;
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
                <div class="button">                   
                </div>
                <div class="p3">
                    <h2>Finding GIFs</h2>

                    <!--<form action="/action_page.php"> -->
                    <form action="gif_fin_suc.php" method=POST>
                    <label for="sgquery">Enter Keywords:</label><br>
                    <input type="text" id="sgquery" name="sgquery" value="" placeholder="(eg. hello wave)" size=30><br>
                    <!-- <p>Choose your search parameter:</p>
                    <input type="radio" id="strctsrch" name="srchopt" value="Strict">
                    <label for="html">Strict (searches for specific memes only)</label><br>
                    <input type="radio" id="lensrch" name="srchopt" value="Lenient">
                    <label for="css">Broad (gives a wider range of memes)</label><br><br> -->
                    <input type="submit" value="Submit">
                    </form> 
                    <p> Click button to see gifs matching your search query parameters</p>
            <!-- p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p-->
                </div>
            </div>
        </div>
    </body>
</html>