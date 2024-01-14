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
            {   
                border-radius: 15px;    /* rounded corners */
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
