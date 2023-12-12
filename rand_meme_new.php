<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
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


    </style>
</head>
<body>
    <?php
    //def functions
    // function rand($x,$y)
    // {
    //     //echo "hello world<br>";
    //     // random number between $upper and $lower, inclusive
    //     // $lower=0;        //lower bound 
    //     // $upper=100;      //upper bound
    //     $r_num = mt_rand($x, $y);
    //     //echo "here is a random number between ".$lower." and ".$upper."<br>";
    //     //echo "here is a random number between $lower and $upper <br> $r_num";
    //     //echo $r_num;
    //     return $r_num;
    // }
    function path($a,$b)
    {
        $str1="http://localhost/test1/";    
        $str2=mt_rand($a,$b);
        $str3=".jpg";

        $str1.=$str2;
        $str1.=$str3;

        return $str1;
    }
    //   path(0,10);

    ?>
    <!-- <div class="div1"> -->
    <!-- <div class="button button1">    -->
        <!-- <div class="div2"> -->
    <center>
            <button class="button1" onClick="window.location.reload();">Generate Meme</button>
            <!-- </div>     -->
        <br/><br/>
    <img src="<?php echo path(1,10); ?>" alt="image goes brrr" style=" width: 30%;  height: auto;">
        </center>
<!-- </div> -->
<!-- </div> -->
</body>
</html>