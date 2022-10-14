<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>phphechoandprint</title>
</head>
<body>
    <?php 
    print "<h2>PHP is fun</h2>"; 
    print "hello world!<br>"; 
    print "i'm about to learn php!";
    ?>
   
   <?php
    echo "<h2>PHP is fun</h2>"; 
    echo "hello world!<br>";
    echo "i'm about to learn php!";
    echo "this", "string", "was", "made", "with multiple parameters";
    ?>


    <?php
    $x=67;
    
    if ($x >= 67) { echo "first division";
        
    }
    if ($x > 40 and $x < 66 ) { echo "second division"; 
        
    } 
    if ($x > 50 and $x < 68 ) {echo "third division";
        
    }
     
    if ($x < 67) {"fail";
        # code...
    }
    

    else
    ?>
</body>
</html>