<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Hangman Game</title>
    <link rel="stylesheet"href="style.css">
  </head>
  <body>
    <h3>Exo 1</h3>
      <?php
        class SayHello {
  	      function __construct()
            {
		         echo "Hello everyone!";
	          }
        }
        $hello = new SayHello();
      ?>
    <h3>Exo 2</h3>
      <?php
        class Greetings {
          // property declaration :
          public $greetings = 'Hello everyone, my name is ';
          // method declaration :
          function introduction()
          {
              echo $this->greetings;
          }
        }
        class Credentials extends Greetings{
          // method declaration :
          function greetingsPlusCredentials($name)
          {
              $this->introduction();
              echo $name;
          }
        }
        $personalizedGreetings = new Credentials();
        $personalizedGreetings->greetingsPlusCredentials("Sylvain");
      ?>
    <h3>Exo 3</h3>
      <?php
        class Sentence {
          // property declaration :
          private $string = 'This is a private statement.';
          // method declarations :
          public function bold()
          {
            echo "<b>".$this->string."</b><br>";
          }
          public function italic()
          {
            echo "<i>".$this->string."</i><br>";
          }
          public function underline()
          {
            echo "<u>".$this->string."</u><br>";
          }
          public function capitalization()
          {
            echo "<t style='text-transform:uppercase'>".$this->string."</t><br>";
          }
        }
        $newSentence = new Sentence();
        $newSentence->bold();
        $newSentence->italic();
        $newSentence->underline();
        $newSentence->capitalization();
      ?>
    <h3>Exo 4</h3>
      <?php
        class SuperArray {
          // property declaration :
          public $array;
          // method declarations :
          public function __construct($array)
          {
    	      $this->array=$array;
          }
          public function sorted()
          {
            $sortedArray=$this->array;
  		      sort($sortedArray);
            return $sortedArray;
  	      }
        }
        $newArray = new SuperArray(array(11, -2, 4, 35, 0, 8, -9));
        var_dump($newArray->sorted());
      ?>
    <h3>Exo 5</h3>
    <?php
      class DoTheMath {
        // property declaration :
        public $number1;
        public $number2;
        // method declarations :
        public function __construct($number1, $number2)
        {
          $this->number1=$number1;
          $this->number2=$number2;
        }
        public function addition()
        {
          $result = ($this->number1) + ($this->number2);
          echo $result."<br>";
        }
        public function substration()
        {
          $result = ($this->number1) - ($this->number2);
          echo $result."<br>";
        }
        public function multiplication()
        {
          $result = ($this->number1) * ($this->number2);
          echo $result."<br>";
        }
        public function division()
        {
          $result = ($this->number1) / ($this->number2);
          echo $result. "<br>";
        }
      }
      $calc = new DoTheMath(1, 3);
      $calc->addition();
      $calc->substration();
      $calc->multiplication();
      $calc->division();
    ?>
  </body>
</html>
