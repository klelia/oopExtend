<?php
class Membership{
    private  string $name;
    private $price;

    private $start_date;

    public function __construct(string $name, $price, $start_date){
        $this->name = $name;
        $this->price =$price;
        $this->start_date = $start_date;
    }

    public function getMembershipDetails(){
        $membership_name = $this->name;
        $membership_price = $this->price;
        $membership_start_date = $this->start_date;
        return "Membership: $membership_name | Price: $membership_price | Start Date: $membership_start_date";
    }
}
