<?php

  $obj = new main();
  $text = "Gayatree";
  $obj -> printthis($text);
  $obj -> printlen($text);
  $message = 'Hello Gayatree';
  $obj -> str_ireplace($message);                                                   
  $binary = "1011";
  $obj -> bin2hex($binary);
  $book  = "page1 page2 page3 page4";
  $obj -> explode($book);
  $array = array('Gayatree', 'Masters', 'Information Systems');
  $obj -> implode($array);
  $str = "Learning PHP String Functions";
  $obj -> strtolower($str);
  $str1 = "internet Technologies";
  $obj -> strtoupper($str1);
  $text1 = "hypertext markup language";
  $obj -> ucwords($text1);
  $text3 = "hypertext markup language";
  $obj -> strrev($text3);

  
  /****Array Objects****/
  
  $fruits = array("mango", "apple", "banana", "grapes");
  $obj -> array_slice($fruits);
  $array1 = array('NewYork', 'NewJersey', 'Boston', 'Philadelphia');
  $obj -> array_splice($array1);
  $obj -> array_unique($names);
  $obj -> array_diff();
  $obj -> array_product();
  $obj -> array_push();
  $obj -> array_pop();
  $obj -> array_sum();
  $obj -> array_reverse();
  $obj -> array_merge();

  class main {

    public function __construct() {

      echo 'Hello I\'m an Object </br>';

    }

    public function printthis($text) {
      echo '<h1>print function demo </h1>';
      print($text);
      echo '<hr>';
    }

    //to print length of a string
    public function printlen($text) {
      echo '<h1>print function length demo </h1>';
      $m=strlen($text);
      echo "The length is $m";
      echo '<hr>';
    }

    //to replace a string
    public function str_ireplace($message) {
      echo '<h1>print function replace string demo </h1>';
      $message=str_ireplace('Hello', 'Hi', $message);
      echo "The replaced string is $message";
      echo '<hr>';
    }

    //to convert from binary to hexadecimal
    public function bin2hex($binary) {
      echo '<h1>binary to hexadecimal conversion </h1>';
      $hex= dechex(bindec($binary));
      echo "The hexadecimal output is $hex";
      echo '<hr>';
    }
    //to split a string by string
    public function explode($book) {
      echo '<h1>splitting a string by string </h1>';
      $page= explode(" ", $book);
      echo $page[0];
      echo $page[1];
      echo '<hr>';
    }
    //joining array elements with a string
    public function implode($array){
      echo '<h1>joining array elements with a string </h1>';
      $join_comma= implode(", ", $array);
      echo $join_comma;
      echo '<hr>';
    }
    //convert a string to lowercase
    public function strtolower($str){
      echo '<h1>convert a string to lowercase </h1>';
      $str= strtolower($str);
      echo $str;
      echo '<hr>';
    }

    //convert a string to uppercase
    public function strtoupper($str1){
      echo '<h1>convert a string to uppercase </h1>';
      $str1= strtoupper($str1);
      echo $str1;
      echo '<hr>';
    }

    //Uppercase the first character of each word in a string
    public function ucwords($text1){
      echo '<h1>convert the first character of each word to uppercase </h1>';
      $text1= ucwords($text1);
      echo $text1;
      echo '<hr>';
    }
    
    //reverse a string demo
    public function strrev($text3){
      echo '<h1>reverse a string </h1>';
      $text3= strrev($text3);
      echo $text3;
      echo '<hr>';
    }

    //extract a slice of the array
    public function array_slice($fruits) {
      echo '<h1>extracting a slice of the array </h1>';
      $output = array_slice($fruits, 2);
      print_r($output);
      echo '<hr>';
    }
    
    //splice two arrays together
    public function array_splice($array1) {
      echo '<h1>splice two arrays together </h1>';
      $new_cities= array('Los Angeles', 'Chicago');
      array_splice($array1, 1, 2, $new_cities);
      print_r($array1);
      echo '<hr>';
    }
    
    //Removes duplicate values from an array 
    public function array_unique($names) {
      echo '<h1>unique array demo </h1>';
      $names = array("a" => "John", "Smith", "Mark", "b" => "Smith" , "Mark", "Jim");
      $result_unique = array_unique($names);
      print_r($result_unique);
      echo '<hr>';
    }
    //computing the difference of array
      public function array_diff() {
       echo '<h1>array difference demo </h1>';
       $array2 = array("a" => "one", "two", "five"); 
       $array3 = array("b" => "one" , "four", "three");
       $result = array_diff($array2, $array3);
       print_r($result);
       echo '<hr>';
    }
    
    //product of an array
     public function array_product() {
      echo '<h1>calculating product of an array </h1>';
      $numbers = array(1,5,7,9);
      echo "product = " . array_product($numbers);
      echo '<hr>';
    }
    
    //push one or more elements onto the end of array
    public function array_push() {
     echo '<h1>array push demo </h1>';	
     $stack = array("rose", "lotus", "lily");
     array_push($stack, "sunflower", "orchid");
     print_r($stack);
     echo '<hr>';
    }
    
    //pop the element off the end of array
    public function array_pop() {
     echo '<h1>array pop demo </h1>';	
     $stack = array("pen", "pencil", "rubber");
     $items = array_pop($stack); //rubber will be assigned to $items
     print_r($stack);
     echo '<hr>';
    }

    //calculating sum of values in an array
    public function array_sum() {
     echo '<h1>array sum demo </h1>';
     $addition = array(5, 6, 7);
     echo "sum = " . array_sum($addition);
     echo '<hr>';
    }

    //returning an array with elements in reverse order     
    public function array_reverse(){
     echo '<h1>array reverse demo </h1>'; 
     $a  = array("red", "blue", "green");
     $reversed_output = array_reverse($a);
     print_r($reversed_output);
     echo '<hr>'; 
    }

    //merging three arrays
    public function array_merge(){ 
     echo '<h1>merging arrays </h1>';
     $b =array("maths","science");
     $c =array("english");
     $d =array("computer", "history");
     print_r(array_merge($b,$c,$d));
     echo '<hr>';
    }
    
    public function __destruct() {

      echo '</br> I\'m Done';

    }

  }

?>
