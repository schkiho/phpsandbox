<?php

  class Person{
    private $name;
    private $email;
    // public static $ageLimit;
    private static $ageLimit = 40;

    public function __construct($name, $email){
      $this->name = $name;
      $this->email = $email;
      echo __CLASS__. ' created<br>';
    }

    public function __destruct(){      
      echo __CLASS__. ' destroyed<br>';
    }

    public function setName($name){
      $this->name = $name;
    }

    public function getName(){
      return $this->name;
    }

    public function setEmail($email){
      $this->email = $email;
    }

    public function getEmail(){
      return $this->email;
    }

    public static function getAgeLimit(){
      return self::$ageLimit;
    }
  }

  // Static prop and method
  // echo Person::$ageLimit;
  echo Person::getAgeLimit();

  // $person1 = new Person('John Doe','john@gmail.com');  

  // echo $person1->getName() . '<br>';
  
  // echo $person1->getEmail() . '<br>';


class Customers extends Person{
  private $balance;

  public function __construct($name, $email,$balance){
    parent::__construct($name, $email, $balance);
    echo 'A new '.__CLASS__.' has been created<br>';
    $this->balance = $balance;    
  }


  public function setBalance($balance){
    $this->balance = $balance;
  }

  public function getBalance(){
    return $this->balance. '<br>';
  }
}

// $customer1 = new Customers('John Doe','john@gmail.com', 300);

// echo $customer1->getBalance();

