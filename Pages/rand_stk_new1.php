<!DOCTYPE html>
<html>
 
<head>
    
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memes</title>

    <style>
        /* Set display to none for image*/
        #image 
            {   
                border-radius: 15px;    /* rounded corners */
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

        .button1 /* default for button */
            {
                background-color: white; 
                color: black; 
                border: 2px solid #04AA6D;
                font-size: 25px;
                border-radius: 15px;    /* smoothing of corners of button */
                padding: 15px 15px;
            }

        .button1:hover  /* when user hovers over button */
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
                /* Center and scale the image nicely */
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

            <button class="button1" onclick="window.location.reload()" id="btnID">Random stickers!</button> <!-- Button for generating random sticker -->
            <br/><br/>
            <img id="image" src="<?php echo path(); ?>" alt="image goes brrrrrrrr" style=" width: 20%;  height: auto; border: 5px solid rgba(255,255,255,0.5);"/> 
            <!-- Image which will get changedto random image every time button is pressed -->

        </center>

<!-- PHP code -->
    <?php 
    function path()
    {
        $servername = "localhost";  //database credentials
        $username = "root"; 
        $password = ""; 
        $dbname = "test1"; 
            
        $a=1;   
        $b=25;  //number of stickers currently available
        // connect the database with the server 
        $conn = new mysqli($servername,$username,$password,$dbname); 
        if ($conn -> connect_errno)     //if connection unsuccesfull
            { 
                echo "Failed to connect to MySQL: " . $conn -> connect_error; 
                exit(); 
            } 
        $var2=mt_rand($a,$b);   //random number
        $sql = "select * from stk1 where id={$var2}";   //selecting a random record based on the random number
        $result = ($conn->query($sql));             //running query and storing result
        //declare array to store the data of database 
        $row = [];  
        if ($result->num_rows > 0)  
            { 
                // fetch all data from db into array  
                $row = $result->fetch_all(MYSQLI_ASSOC);   
            }    
        if(!empty($row)) 
        foreach($row as $rows) 
            {
                $queret=$rows['address']; //gives the address of the randomly selected image record
            }

        return $queret;
        }
    ?> 
    <!-- End of PHP code -->
    <div>   
</body>
 
</html>
