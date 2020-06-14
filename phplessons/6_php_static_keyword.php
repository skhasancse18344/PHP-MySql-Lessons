<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Static Keyword</title>
</head>
<body>
    
    <?php 
    function test1(){
        static $x=10;
        echo $x;
        $x++;
    }
    test1();
    echo "<br>";
    test1();
    echo "<br>";
    test1();
    echo "<br>";
    test1();
    
    
    ?>
    
</body>
</html>