<?php
class HW1
{
    // Properties
    public $name;


    // Methods
    function setHello($name) {
        $this->name = $name;
    }
    function getHello() {
        return $this->name;
    }

}

$obj = new HW1();
$obj->setHello('Hello PHP!');

echo $obj->getHello();






       function getGreeting($firstName, $lastName)
       {
          echo "Привет $firstName, $lastName <br>";
       }

       getGreeting('Alex', 'Petrechenko');

       function sum($num1, $num2)
       {
          $z = $num1 + $num2;
          return $z;
       }

       echo sum (5,10) . "<br>";

