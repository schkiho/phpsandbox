<p>
<?php
  //  single line comment
  #   single line comment
  /*
      multi line comment
  */
  
  #VARIABLES
  /*
      - Prefix $
      - Start with letter or an underscore
      - Only letters, numbers and underscores
      - Case sensitive
  */

  #DATATYPES
  /*
      String
      Integers (positive or negative)
      floats (dezimal numbers)
      Booleans
      Arrays
      Objects
      NULL
      Resource
  */
  
  // String
  $output = 'Echo Hello World';
  $string1 = 'Hello';
  $string2 = 'Daniel';
  // escape character for using single quots in a string
  // if using double quots on the outside you don't need this 
  $string3 = 'They\'re Here';
  $string4 = "They're Here";
  // for concat strings in php use a . instead of +
  $greeting = $string1 .' '. $string2;
  // or use double quots "" to parse the variable, single quots '' see it as a string
  $greeting2 = "$string1 $string2";
  // Integers
  $num1 = 4;
  $num2 = 10;
  $sum = $num1 + $num2;
  //floats
  $float1 =4.5;
  // Booleans
  $bool1 = true;

  #CONSTANCE
  // first parameter is the name Case sensitive, Content, to disable case sensivity add true
  define('GREETING','Hello Everyone',true);

  // fast output no value returned
  echo greeting;
  
?>
</p>

<p>
<?php 
  // bit more slow returns value can be used with expression
  print 'Print Hello World';
?>
</p>
