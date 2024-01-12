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
                /*display: none;  /* for initially setting as hidden */
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

        .div2
            {
                align-items: center;
            }

        .image
            {
                display: block;     /* sets image display */
                margin-left: auto;  /* aligns left */
                margin-top: auto;   /* aligns from top */
            }

        .div1 
            {
                width: 100px;
                height: 100px;
                /* background-color: red; */
                position: absolute; 
                top:0;
                bottom: 0;
                left: 0;
                right: 0;
                margin: auto;
            }


        .button 
            {
                border: none;
                color: white;
                padding: 16px 32px;     /* distance of text from button edges */
                text-align: center;
                text-decoration: none;  /* to remove hyperlink mods */
                display: inline-block;  
                font-size: 16px;
                /* margin: 4px 2px; */
                transition-duration: 0.4s;  /* for hover transition duration */
                cursor: pointer;    
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

                /* .button2 {
                background-color: white; 
                color: black; 
                border: 2px solid #008CBA;
                }

                .button2:hover {
                background-color: #008CBA;
                color: white;
                } */

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
                /* The image used */
                background-image: url("..\\Images\\other\\pepe_bg1.jpg");

                /* Full height */
                height: 100%;

                /* Center and scale the image nicely */
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }

        body, html 
            {
                height: 100%;    /* for image */
                margin: 0;
            }
    </style>
</head>
 
<body>
    <!-- <div>
        <h3>Click on the button to see image</h3> -->
        <!-- Add id to image -->

    <!-- </div> -->

    <div class="bg">
        <a href="../webpage_home.html">     <!-- Link to home webpage -->
                    <button class="button2">&larr;Main Menu</button>    <!-- Button for going back to main menu -->
        </a>
        <center>

            <button class="button1" onclick="window.location.reload()" id="btnID">Random stickers!</button> <!-- Button for generating random sticker -->
            <br/><br/>
            <img id="image" src="<?php echo path(); ?>" alt="image goes brrrrrrrr" style=" width: 20%;  height: auto; border: 5px solid rgba(255,255,255,0.5);"/> <!-- Image which will get changedto random image 
                                                                                                        every time button is pressed -->

        </center>

        <?php 

        function path()
        {
            $servername = "localhost"; 
            $username = "root"; 
            $password = ""; 
            $dbname = "test1"; 
                
            $a=1;
            $b=25;
            // connect the database with the server 
            $conn = new mysqli($servername,$username,$password,$dbname); 
            if ($conn -> connect_errno) 
            { 
            echo "Failed to connect to MySQL: " . $conn -> connect_error; 
            exit(); 
            } 
            $var2=mt_rand($a,$b);
            $sql = "select * from stk1 where id={$var2}"; 
            $result = ($conn->query($sql)); 
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

                return $queret;
            }
        ?> 

<!-- 
    <p id="demo">hi</p> -->
 <!-- <p>
    hello world
 </p>

 <h2>
    yoo how u doing
 </h2> -->
 <!-- <button type="button" onclick="show2()" id="btnID2">
        new image sfd
    </button> -->
    
    
    <!--
        Javascript Code
    -->
    <script>
        //unused
        // function show() {
        //     /* Access image by id and change 
        //     the display property to block*/
        //     document.getElementById('image')
        //         .style.display = "block";
        //     document.getElementById('btnID')
        //         .style.display = "none";
        // }
        // function show2()
        // {
        //     document.getElementById('image');
        // }

        let fst=0;      //kinda like flag, tells if program is executing first time or subsequent times
        function rpath()
        {
            let ul=10;                           //upper bound (number of memes)
            let x = Math.floor((Math.random() * ul) + 1);   //picks a random number between 1 and upper limit
            let str1 = "http://localhost/test1/Images/stickers/";  //first part of image path
            let str3 = ".jpg";                                  //last part of image path
            let res = str1.concat(x);   
            let resf = res.concat(str3);                        //generates path to a random image
            // document.getElementById('demo').innerHTML+='<img id="image" src="'+ resf + '" alt="GFG image" />';
            document.getElementById('image').src=resf;          //sets the path of image as the randomly generated string above
            // if (document.getElementById('image').style.display==="none")
            // {
            if(fst===0)     //if first time execution, image has to be unhidden, other times only above code has to be executed, below code becomes pointless
            {
            document.getElementById('image').style.display="block";
            fst=1
            }     //makes the image visible
            // }// return resf;
        }
    </script>
    <div>   
</body>
 
</html>