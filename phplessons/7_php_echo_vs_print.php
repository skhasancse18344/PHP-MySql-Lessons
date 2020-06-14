<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Echo vs Print</title>
</head>
<body>
    <?php 
    
    //Basic output using echo
    echo "<h1>Test Header</h1>";
    echo "Sample paragraph 1. <br>";
    
    //Echo allows multiple parameters - Print does not
    echo "This ", "String ", "has ", "Multiple parameters";
    //Multiple parameter in an echo statement are rarely used
    echo "<hr/>";
    
    //OUTPUT Variable echo
    $text1="Sample text 1";
    $text2="Soccer";
    $x=20;
    $y=80;
    
    echo "<h2>". $text1. "</h2>";
    echo "I Like " .$text2. "<br>";
    echo $x+$y;
    
    //Basic output using print
    print "<h1>Test Header</h1>";
    print "Sample paragraph 1 .<br>";
    print "<hr/>";
    
    //Output Variable Print
    $text1="Sample text 1";
    $text2="Soccer";
    $x=20;
    $y=80;
    
    print "<h2>". $text1. "</h2>";
    print "I Like ".$text2. "<br/>";
    print $x+$y;
    
    ?>
</body>
</html>