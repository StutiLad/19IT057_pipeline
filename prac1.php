<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <?php
    class Person{
        private $fname;
        private $id;
        // Constructor
        public function __construct($fname, $id){
            echo "Initialising the object...<br/>";
            $this->fname = $fname;
            $this->id = $id;
        }
        // Destructor
        public function __destruct(){
            echo "Destroying Object...";
        }
        // public method to show name
        public function showName(){
            echo "My name is " . $this->fname . ", ID is " . $this->id . "<br/>";
        }
    }
    // creating class object
    $john = new Person("Stuti Lad", "19IT057");
    $john->showName();
    
    // added line
    echo "This is Jenkins demo  by 19IT057 (STUTI LAD)";

    ?>
</body>
</html>
