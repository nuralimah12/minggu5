<!DOCTYPE HTML>
<html>
    <head>
        <title>Learn About String</title>
    </head>
    <body>
        <?php 
        
        $numberedString = "123456789012345678901234567890";
        $fivePos = strpos($numberedString,"5");
        echo"Posisi angka 5 di dalam String adalah $fivePos";
        $fivePos2 = strpos($numberedString,"5",$fivePos+1);
        echo"<br> Posisi angka 5 di dalam String adalah $fivePos2";
        
        ?>
    </body>
    </html>