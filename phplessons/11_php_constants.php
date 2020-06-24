<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Constants</title>
</head>
<body>
    
    <?php 
    //An identifier for a given value .A constant cannot be changed during the script, as a variable can.
    
    //Case-Sensitive
    define ("WELCOME", "Hello my name is SK Hasan");
    echo WELCOME;
    echo "<hr/>";
    
    //Case-Insensitive
    define("WELCOME2","Hello my name is John Smith",true);
    echo welcome2;
    echo "<hr/>";
    
    //Constants are global
    define ("CAR","VOLVO");
   
    function mycar(){
        echo CAR;
    }
    mycar();
    
    ?>
    
</body>
</html>