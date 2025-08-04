<?php

// echo "OOPS" ;
// user class
class User
{
    public $name;
    public $email;
    public $password;

    // constructor
    public function __construct($name, $email, $password)
    {
        // echo "Constructor called\n <br>";
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    function set_name($name)
    {
        $this->name = $name;
    }

    function get_name()
    {
        return $this->name;
    }
}
// declare values in constructor
$user1 = new User("Azmeer", "azmeer@gmail.com", "1234");
$user2 = new User("Wasey", "wasey@gmail.com", "4564");
// $user3 = new User();
// $user4 = new User();

// set values to attributes
$user1->name = "Zunoon";
$user2->name = "Hunni";
$user1->email = "zunoon@gmail.com";
$user1->password = "1234";

// echo $user1->name . "<br>";

// set name by setter methods
$user1->set_name("Ali");
$user2->set_name("Akbar");

// echo $user1->get_name();
echo "<br>";
// echo $user2->get_name();

// var_dump($user1);


// print value of constructor 

// echo $user1->name;
echo "<br>";
// echo $user2->email;


class Employee extends User
{
    public $title;
 

    public function __construct($name, $email, $password, $title)
    {
        parent::__construct($name, $email, $password);
        $this->title = $title;
    }

    function get_title(){
       return $this->title;
    }
}


$employee1 = new Employee("Ali", "ali@gmail.com", "1234", "Manager");

echo $employee1->get_title();