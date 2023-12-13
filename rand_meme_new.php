<!DOCTYPE html>
<html>
 
<head>
    
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memes</title>

    <style>
        /* Set display to none for image*/
        #image {
            display: none;
            border-radius: 15px;
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
                display: block;
                margin-left: auto;
                margin-top: auto;   
            }

                    .div1 {
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


                    .button {
        border: none;
        color: white;
        padding: 16px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        /* margin: 4px 2px; */
        transition-duration: 0.4s;
        cursor: pointer;
        }

        .button1 {
        background-color: white; 
        color: black; 
        border: 2px solid #04AA6D;
        font-size: 25px;
        border-radius: 15px;
        padding: 15px 15px;
        }

        .button1:hover {
        background-color: #04AA6D;
        color: white;
        }

        a:link {
  color: green;
  background-color: transparent;
  text-decoration: none;
}

a:hover {
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
                background-image: url("..\\Images\\other\\bg1.jpg");

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
    <div class="bg">
    <!-- <div>
        <h1>GeeksforGeeks</h1>
        <h3>Click on the button to see image</h3> -->
        <!-- Add id to image -->

    <!-- </div> -->
    <a href="../webpage_home.html">
                <button class="button2">&larr;Main Menu</button>
            </a>
    <center>
    <button class="button1" onclick="rpath()" id="btnID">
        Generate meme
    </button>
    
    
    <img id="image" src="" alt="image goes brrrrrrrr" style=" width: 30%;  height: auto;"/>

    </center>
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
    
    
    
    <script>
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

        function rpath()
        {
            let x = Math.floor((Math.random() * 10) + 1);
            let str1 = "http://localhost/test1/Images/memes/";
            let str3 = ".jpg";
            let res = str1.concat(x);
            let resf = res.concat(str3);
            // document.getElementById('demo').innerHTML+='<img id="image" src="'+ resf + '" alt="GFG image" />';
            document.getElementById('image').src=resf;
            document.getElementById('image').style.display="block";
            // return resf;
        }
    </script>
    <div>
</body>
 
</html>