<!DOCTYPE html>
<html>
 
<head>
    <title>GIF!</title>
</head>
<style>
            body, html
            {
                height: 100%;
                margin: 0;
            }
            .center
            {
                margin: auto;
                width: 25%;    /* how much page width is occupied */
                position: absolute;     /* it is not relative to some other elements, rather to the page size */
                top: 25%;   /* how much distance from top */ 
                left: 40%;  /* distance from left*/
                padding: 10px;
                
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
                top: auto;
                left: 20%;
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
                background-color: #051a59;
                color: white;
            }
            .button:hover 
            {
                background-color: #051a59;
                color: white;
            }
            .button
            {
                border: none;
                color: black;
                padding: 16px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 18px;
                margin: 4px 2px;
                transition-duration: 0.4s;
                cursor: pointer;
                top:0%;
                left: 0%;
                border-radius: 10px;
                font-family: "Lucida Console" , "Courier New", monospace;
            }
            .div2
            {
                align-items: center;
            }

        </style>

<body>
<div class="bg">        
    <a href=../webpage_home.html>
        <button class="button2">&larr; Main Menu</button>
    </a>
    <div class="cls1">
        <div class="div2">
            <a href="gif_fin.php">    
                <button class="button">More GIFs!</button>
            </a><br/>
            <video style=" width: 50%;  height: 50%; border: 5px solid rgba(255,255,255,0.5);" controls>
            <source src="<?php echo giffin(); ?>" type="video/mp4">
            Oops, can't display GIF :(
            </video><br/>
        </div>
    </div>
</div>

    <?php
        function giffin()
        {
        $conn = mysqli_connect("localhost", "root", "", "test1");
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking values from the form data(input)
        $que1 =  $_REQUEST['sgquery'];

        // Performing query execution
        // here our table name is gif1
        $sql1 = "SELECT address FROM gif1 WHERE keywords like '%{$que1}%';";
        $result = ($conn->query($sql1)); 
        if (empty($result))
            {
                echo "Emptyyyyyyyy";
                exit();
            }
        $row = []; 
        if ($result->num_rows > 0)  
            { 
                // fetch all data from db into array  
                $row = $result->fetch_all(MYSQLI_ASSOC);   
            }        
        if(!empty($row)) 
        foreach($row as $rows) 
            {
                $queret=$rows['address']; 
            }
        return $queret;
        }
    ?> 
</body>
 
</html>