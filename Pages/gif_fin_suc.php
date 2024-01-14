<!DOCTYPE html>
<html>
 
<head>
    <title>GIF!</title>
    <link rel="stylesheet" href="style_css.css">
</head>
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
<body>
<div class="bg">        
    <a href=../webpage_home.html>
        <button class="button">&larr; Main Menu</button>
    </a>
    <div class="cls2">
        <div class="div2">
            <a href="gif_fin.php">    
                <button class="button8">More GIFs!</button>
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
