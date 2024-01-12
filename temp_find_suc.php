<!DOCTYPE html>
<html>
 
<head>
    <title>Template!</title>
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
            .p3 
            {
                font-family: "Lucida Console" , "Courier New", monospace;
            }

        </style>

<body>
<div class="bg">        
    <a href=../webpage_home.html>
        <button class="button2">&larr; Main Menu</button>
        </a>
            <div class="cls1">

    
        <?php
        function tempfin()
        {
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "test1");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $que =  $_REQUEST['squery'];
        // $last_name = $_REQUEST['last_name'];
        // $gender =  $_REQUEST['gender'];
        // $address = $_REQUEST['address'];
        // $email = $_REQUEST['email'];
         
        // Performing insert query execution
        // here our table name is college
        $sql = "SELECT address FROM temp1 WHERE keywords like '%{$que}%';";
         
        if(mysqli_query($conn, $sql)){
            // echo "Finding template..."; 
 
            // echo nl2br("\n$first_name\n $last_name\n "
            //     . "$gender\n $address\n $email");
        } else{
            echo "ERROR: Hush! ";
                
        }
        $result = ($conn->query($sql)); 

        if (empty($result))
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
        // echo $row;
    

            if(!empty($row)) 
            foreach($row as $rows) 
            {
            
            $queret=$rows['address']; 
            }
                
        // else
        // {
        //     echo "Sorry, templates matching keyword {$que} not found :(";
        //     exit();
        // }
            return $queret;
        }
    ?> 
 <!--        // Close connection
        mysqli_close($conn);
    -->

        <div class="div2">
    <a href="temp_fin_new.php">    
    <button class="button">More Templates!</button>
    </a>
    <br/>
    <img id="image" src="<?php echo tempfin(); ?>" alt="" style=" width: 50%;  height: auto; border: 5px solid rgba(255,255,255,0.5);"/>
    <br/>
    </div>

</body>
 
</html>