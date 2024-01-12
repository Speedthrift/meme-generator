<!DOCTYPE html>
<html>
 
<head>
    
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memes</title>

    <style>
        /* Set display to none for image*/
        #image 
            {        /* for image */
                border-radius: 15px;    /* roundedd corners */
            }
        .center
            {
                margin: auto;
                width: 25%;    /* how much page width is occupied */
                position: absolute;
                top: 25%;
                left: 40%;
                padding: 10px;    
            }

        .image
            {
                display: block;     /* sets image display */
                margin-left: auto;  /* aligns left */
                margin-top: auto;   /* aligns from top */
            }

        input[type=submit] /* default for button */
            {
                background-color: white; 
                color: black; 
                border: 2px solid #04AA6D;
                font-size: 25px;
                border-radius: 15px;    /* smoothing of corners of button */
                padding: 15px 15px;
                text-decoration: none;
                cursor: pointer;
            }

        input[type=submit]:hover  /* when user hovers over button */
            {
                background-color: #04AA6D;
                color: white;
            }

        a:link 
            {
                color: green;
                background-color: transparent;
                text-decoration: none;
            }

        a:hover 
            {
                color: red;
                background-color: transparent;
                text-decoration: underline;
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

        .bg 
            {
                background-image: url("..\\Images\\other\\pepe_bg1.jpg");
                height: 100%;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }

        body
            {
                height: 100%;    /* for image */
                margin: 0;
            }
    </style>
</head>
 
<body>
    <div class="bg">
        <a href="../webpage_home.html">     <!-- Link to home webpage -->
                <button class="button2">&larr;Main Menu</button>    <!-- Button for going back to main menu -->
        </a>
        <center>
        <form action="rand_stk_new1.php" method=POST>
                <input type="submit" value="Random stickers">
                </form> 
        </center>

<!-- Javascript Code -->
    <script>
        let fst=0;      //kinda like flag, tells if program is executing first time or subsequent times
        function rpath()
        {
            let ul=10;                           //upper bound (number of memes)
            let x = Math.floor((Math.random() * ul) + 1);   //picks a random number between 1 and upper limit
            let str1 = "http://localhost/test1/Images/sticker_new/";  //first part of image path
            let str3 = ".jpg";                                  //last part of image path
            let res = str1.concat(x);   
            let resf = res.concat(str3);                        //generates path to a random image
            document.getElementById('image').src=resf;          //sets the path of image as the randomly generated string above
            if(fst===0)     //if first time execution, image has to be unhidden, other times only above code has to be executed, below code becomes pointless
            {
            document.getElementById('image').style.display="block";
            fst=1
            }     //makes the image visible
        }
    </script>
    <div>   
</body>
 
</html>