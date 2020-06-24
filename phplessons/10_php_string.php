<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP String</title>
</head>
<body>
    <?php 
    
    //Word Count
    echo str_word_count("Hello World");
    echo "<hr/>";
    
    //Reverse words
    echo strrev("Hello World");
    echo "<hr/>";
    
    //Search for text inside a string
    echo strpos("Hello World","World");
    echo "<hr/>";
    
    //Replace the text inside a string 
    echo str_replace("World","John","Hello World");
    echo "<hr/>";
    
    
    ?>
    
    
</body>
</html>