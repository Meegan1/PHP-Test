<?php
//turn on errors so you can see where you are going wrong.
error_reporting(E_ALL);
ini_set('display_errors', 1);

//1.  Set up your environment.  You'll see this sentence appear when it's working.... you'll also see a bunch of errors, which won't go away until you complete all the steps below!
echo "It's working\n";

//2.  Create an instance of a PHP class called Thing,  It will need a "contructor" to process the parameter 4 being taken in,
$thing = new Thing(4);

//3.  Create a function within your new class that returns the value that you passed in above, in this case, a 4.
echo $thing->getValue() . "\n";

//4.  Create another function, within your new class, that writes the alphabet a-z to the screen.  Try and use a loop.
$thing->writeAlpha();

//5.  If someone passes the string "backwards" into the same function above, write out the alphabet backwards.
$thing->writeAlpha("backwards");

//6.  Write a function, within the same object that takes 2 number parameters, adds them and returns the sum.
echo $thing->addNumbers(4,4) . "\n";

// 7. Again, this function, within the object, takes in a number parameter.  It then changes the 4 we set above in question 2 to a 6.
$thing->setValue(6);

//You've already written this function in number 3, but this time when I call it, it should show the number 6, as you set it in question 7 above.
echo $thing->getValue() . "\n";

//8.  This function, again within the object, will print out the numbers 1 to 10, stepped by 1 (1,2,3,......8,9,10)
$thing->writeNumbers();

//9.  This function, is as above, but takes in a parameter.  The parameter tells you what multiple to step the numbers.  You'll need to show 10 numbers.. in this case you woudl show 5,10,15....45, 50.
$thing->writeNumbers(5);

//10.  This function will print to the screen 100 numbers stepped by 1 (1,2,3...).  But for multiples of three print “Fizz” instead of the number and for the multiples of five print “Buzz”. For numbers which are multiples of both three and five print “FizzBuzz”.
$thing->printFizzBuzz();

//11. Upload your code to a git repo and share with us..

class Thing {
    private $value;

    function __construct($value) {
        $this->value = $value;
    }

    function getValue() {
        return $this->value;
    }

    function setValue($value) {
        $this->value = $value;
    }

    function writeAlpha($string = "forwards")
    {
        if ($string == "forwards") {
            foreach (range('A', 'Z') as $letter) {
                echo $letter . "\n";
            }
        }
        elseif($string == "backwards") {
            foreach(range('Z', 'A') as $letter) {
                echo $letter . "\n";
            }
        }
    }

    function addNumbers($a, $b) {
        return $a + $b;
    }

    function writeNumbers($numbers = 10) {
        foreach(range(1, $numbers) as $number) {
            echo $number . "\n";
        }
    }


    function printFizzBuzz() {
        foreach(range(1, 100) as $number) {
            if(($number % 15) == 0)
                echo "FizzBuzz" . "\n";
            elseif(($number % 3) == 0)
                echo "Fizz" . "\n";
            else if(($number % 5) == 0)
                echo "Buzz" . "\n";
            else
                echo $number . "\n";
        }
    }
}

?>

