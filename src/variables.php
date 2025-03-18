<?php
// Definition of variables
$foo = 'bar';
$bar = "Hello $foo"; // Formatted string
${'whatever-name'} = 25; // String as name
$operand = 5;
$v_name = 'whatever-name'; // Refer to variable by string name
$result = $$v_name * $operand
$new_bar = &$bar; // Refer to the same object referred to by $bar

function count() // Counting example for FizzBuss
  {
    static $c = 0; // Variable starts with 0 on first function invocation
    $c++; // Variable increments each time the function is called
    $str = '';
    if ($c % 3 == 0)
    {
      $str = $str."Fizz";
    }
    if ($c % 5 == 0)
    {
      $str = $str."Buzz";
    }
    if (strlen($str))
    {
      $str = &$c;
    }
    echo $str."\n";
  }
?>
