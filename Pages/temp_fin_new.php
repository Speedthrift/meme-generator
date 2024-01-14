<!DOCTYPE html>
<html>
    <head>
        <title>
            Finding templates
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
            <button class="button">&larr; Main Menu</button>   <!-- For going back to homepage -->
        </a>
            <div class="cls1">
                <div class="p3">
                    <h2>Finding meme templates</h2>
                    <form action="temp_find_suc.php" method=POST>   <!-- when button is pressed -->
                    <label for="squery">Enter Keywords:</label><br> <!-- For taking search params -->
                    <input type="text" id="squery" name="squery" value="" placeholder="(eg. this is fine)" size=25><br>
                    <input class="button8" type="submit" value="Submit">            <!-- For forwarding to next page -->
                    </form> 
                    <p> Click button to see templates matching your search query parameters</p>
                </div>  <!-- End of div p3-->
            </div>  <!-- End of div cls1-->
        </div>  <!-- End of div bg-->
    </body>
</html>
