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
    <div class="center">
    <img src="<?php echo path(0,10); ?>" alt="image goes brrr" height="250" width="250">
</div>
</body>
</html>