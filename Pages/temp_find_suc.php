<!DOCTYPE html>
<html>
 
<head>
    <title>Template!</title>
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
        <a href="temp_fin_new.php">    
            <button class="button8">More Templates!</button>
        </a><br/>
        <img id="image" src="<?php echo tempfin(); ?>" alt="" style=" width: 50%;  height: auto; border: 5px solid rgba(255,255,255,0.5);"/><br/>
    </div> <!-- End of div div2 -->
</div>  <!-- End of div cls1 -->
</div>  <!-- End of div bg -->
        
    <?php
        function tempfin()
        {
        $conn = mysqli_connect("localhost", "root", "", "test1");   //connecting to database
        // Check connection
        if($conn === false){        //if connection unsuccessfull
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
        // Taking value from the form data(input)
        $que =  $_REQUEST['squery'];
        // Performing select query execution
        // here the table name is temp1
        $sql = "SELECT address FROM temp1 WHERE keywords like '%{$que}%';";
        $result = ($conn->query($sql));     //performs the query and stores the result
        if (empty($result))     //if not found
            {
                echo "Emptyyyyyyyy";
                exit();
            }
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
                $queret=$rows['address']; 
            }

        return $queret;
        }
    ?> 
</body>
 
</html>
