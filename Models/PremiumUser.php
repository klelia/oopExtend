<?php
require_once 'User.php';
class PremiumUser extends User{
    public $membership;
    public function __construct($name, $lastname, $age,Membership $membership){
        parent::__construct($name, $lastname, $age);
        $this->membership = $membership;

    }
}