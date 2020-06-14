<!DOCTYPE html>
<html>
<head>
    <title>PHP Variable Scope</title>
</head>
<body>
 <?php 
    
    //Global Scope Example
    
    $x=5; //Global scope
    
    function test1() {
        //Will generate error
        echo "<p>Value of x is : $x</p>";
    }
    test1();
    
    echo "<p>Value of x is : $x</p><hr/> ";
    
    //Local scope example
    
function test2() {
    
    $y=5; //Local Scope
    echo "<p>Value of y is : $y</p>";
    
}
    test2();
    //Will generate error
    
    echo "<p>Value of y is : $y</p> ";  
    
    ?>
 
 
</body>
</html>