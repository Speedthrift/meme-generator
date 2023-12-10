<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
            .center     /* for image, to be adjusted when merging */
            {
                margin: auto;
                width: 25%;    /* how much page width is occupied */
                position: absolute;
                top: 25%;   /* position from top */
                left: 40%;  /* position from left */
                padding: 10px;
            }
    </style>
</head>
<body>
    <?php
    //      //unused code
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

    //when new memes added, update $b
    function path($a,$b)        //$b: upper bound 
    {
        $str1="http://localhost/test1/";    //first part of address to be returned (home directory)
        $str2=mt_rand($a,$b);               //generates a random number (file name)
        $str3=".jpg";                       //extension to complete file path

        $str1.=$str2;                       //concatenates all three strings above
        $str1.=$str3;

        return $str1;                       //like c:\users\ak\fold\3.jpg
    }
    //   path(0,10);

    ?>
    <div class="center">
            <img src="<?php echo path(0,10); ?>" alt="image goes brrr" height="250" width="250">
            <!-- php script is used to get a path containing a randomised image name -->
    </div>
</body>
</html>