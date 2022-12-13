<?php 
class User{

    protected $id;
    public $name;

    public $lastname;

    public $email;
    public $password;

    public $age;

    private $discount;
    final public const country = 'Italy';


    public function __construct($name, $lastname, $age)
    {
       $this->name = $name;
       $this->lastname = $lastname;
       $this->age = $age;
        $this->set_discount();

    }

    public function set_discount(){
        $this->discount = $this->age > 70 ? 20 : 0;
    }

    public function get_discount(){
        return "Sconto: $this->discount";
    }
}