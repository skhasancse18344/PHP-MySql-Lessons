<!DOCTYPE html>
<html>
<head>
    <title>Introduction To Object-Oriented Programming</title>
</head>
<body>
    <p>  
    <?php 
           //Create the class
    class Person{
        //Create properties - (variable tied to object)
        public $firstname;
        public $lastname;
        public $age;
        
        //Assigning values to the property variables
        public function _construct ($firstname, $lastname, $age){
            $this->firstname = $firstname;
            $this->lastname=$lastname;
            $this->age=$age;
        }
        //Create a method (Function tied to an object)
        public function hello() {
            return "I am" . $this->firstname ." ". $this->lastname . ", My age is : " . $this->age . " ";
        }
    }
    //Create a new person named "John Smith" who is 25 years old
    $person1 =new Person('John' , 'Smith' , 25);
    $person2=new Person('Joe' , 'Bob' , 35);
    //Print out what the hello method  returns
    echo $person1-> hello();
    echo "<br>";
    echo $person2-> hello();

    ?>
 </p>
    
</body>
</html>