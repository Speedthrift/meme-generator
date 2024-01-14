<!DOCTYPE html>
<html>
 
<head>
    
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memes</title>
    <link rel="stylesheet" href="style_css.css">
    <style>
        /* Set display to none for image*/
        #image 
            {        /* for image */
                border-radius: 15px;    /* roundedd corners */
            }

        .bg
            {
                background-image: url("..\\Images\\other\\pepe_bg1.jpg  ");
                /* Full height */
                height: 100%;
                /* Center and scale the image nicely */
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }

    </style>
</head>
 
<body>
    <div class="bg">
        <a href="../webpage_home.html">     <!-- Link to home webpage -->
                <button class="button">&larr;Main Menu</button>    <!-- Button for going back to main menu -->
        </a>
        <center>
        <form action="rand_stk_new1.php" method=POST>
                <input type="submit" value="Random stickers">
                </form> 
        </center>
    <div>   
</body>
 
</html>
