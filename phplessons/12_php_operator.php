<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Operators</title>
</head>
<body style="background-color:#bdd2e8; color:#446510;font-style:italic">
   <h1>PHP Arithmetic Operators</h1>
   <!-- Used to compare two values -->
   <?php 
    $x=50;
    $y=69;
    
    //Addition
    echo $x+$y;
    echo "<hr/>";
    
    //Substruction
    echo $x-$y;
    echo "<hr/>";
    
    //Multiplication
    echo $x*$y;
    echo "<hr/>";
    
    //Division
    echo $x/$y;
    echo "<hr/>";
    
    ?>
    <h1>PHP Assignment Operator</h1>
    <!-- Used with numeric values to write values to variable -->
    
    <?php 
    //The left operand is assigned the values on the right
    $x=40;
    echo $x;
    
    ?>
    
    <h1>comparison Operators</h1>
    <!-- Used to two values (Number to a string) -->
    <?php 
    //Equal
    $x=300;
    $y="300";
    var_dump($x==$y);//Output is true because x=y
    
    //Identical
    var_dump($x===$y);//Output is false because type are not equal
    
    //Not equal
    var_dump($x != $y);//Output is false because values are equal
    //Not equal
    var_dump($x<>$y);//Output is false because values are equal
    
    //Not identical
    var_dump($x !== $y);//Output is true because types types not equal
    
    //Greater Than
    $x=300;
    $y=500;
    var_dump($x>$y);//Output is false
    
    //Less than
        $x=300;
    $y=500;
    var_dump($x<$y);//Output is true
    
    //Greater than or equal to
    var_dump($x>=$y);//Output is false
    
    //Less than or equal to
    var_dump($x<=$y);//out is true
    
    ?>
    
    <h1>Incriment/Decriment Operator</h1>
    <!-- Used to incriment or decriment a variable value -->
    <?php 
    //post -incriment - returns $x,then increment $x by one
    $x=50;
    echo $x++;
    echo "<hr/>";
    
    //Free -incriment - Incriment $x by one,then returns $x
    $x=50;
    echo ++$x;
    echo "<hr/>";
    
    //post -decriment - returns $x,then decrement $x by one
    $x=50;
    echo $x--;
    echo "<hr/>";
     //Free -decriment - decriment $x by one,then returns $x
    $x=50;
    echo --$x;
    echo "<hr/>";
    ?>
    <h1>Logical Operators</h1>
    <!-- Used to combine conditonal statment -->
    <?php 
    //And True if both $x and $y are true
    $x=200;
    $y=300;
    if($x==200 and $y==300){
        echo "True";
        echo "<hr/>";
    }
    //Or- True if either $x or $y is true
    $x=200;
    $y=300;
    if($x==200 or $y==90){
        echo "True";
        echo "<hr/>";
    }
    //And-&&- True if both $x and $y are true
    $x=200;
    $y=300;
    if($x==200 && $y==300){
        echo "True";
        echo "<hr/>";
    }
        //Or- $x || $y -True if both $x and $y are true 
    $x=200;
    $y=300;
    if($x==200 || $y==300){
        echo "True";
        echo "<hr/>";
    }
        //Not- !$x- True if $x is not true
    $x=200;
    $y=300;
    if($x!==100){
        echo "True";
        echo "<hr/>";
    }
    
    ?>
    
    <h1>PHP String Operator</h1>
    <!-- Used to specifically for string -->
    <?php 
    //Concatination - concatination of $x and $y
    $x="Hello ";
    $y="World";
    echo $x . $y;
    echo "<hr/>";
    
    //Concatination assignment - Appends $text2 to $text1
    $x="SK ";
    $y="Hasan";
    $x .=$y;
    echo $x;
    echo "<hr/>";
    
    ?>
    
    <h2>Array Operator</h2>
    <!-- Used to compare arrays -->
    <?php 
    //Union- Union of $x and $y
    $x=array("a"=>"blue","b"=>"red");
    $y=array("c"=>"Pink","d"=>"Yellow");
    
    print_r($x+$y); //Union
    echo "<hr/>";
    
    //Equality - Returns true if $x and $y have the same key/value pairs
    var_dump($x==$y);
    echo "<hr/>";
    
    //Identity- Return true $x and $y have the same key/value pairs in the same order and of the same types
    
    var_dump($x===$y);
    echo "<hr/>";
    
    //Inequality- Return true if $x is not equal to $y
    var_dump($x != $y);
    echo "<hr/>";
    
    //Non- Identity - Returns true if $x is not identical to $y
    var_dump($x !== $y);
    echo "<hr/>";
    
    ?>
    
</body>
</html>