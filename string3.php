<!DOCTYPE HTML>
<html>
    <head>
        <title>Learn About String</title>
    </head>
    <body>
        <?php 
        
        $rawString = "Welcome Birmingham Parent.
        Your replacemen is pleasure to have!";
        
        $malestr = str_replace("replacemen","son",$rawString);
        $femalestr = str_replace("replaceman", "daughter",$rawString);

        echo "Son: ".$malestr."<br>";
        echo "Daughter ".$femalestr."<br>"; 
        
        ?>
    </body>
    </html>