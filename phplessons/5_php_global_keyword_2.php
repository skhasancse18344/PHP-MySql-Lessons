<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Global Keyword</title>
</head>
<body>
    
    <?php 
    $x=30;
    $y=20;
    function test1(){
        $GLOBALS['y']=$GLOBALS['x']+$GLOBALS['y'];
    }
    test1();//Execute Function
    echo $y;//Output value of variable y
    
    ?>
    
    
</body>
</html>