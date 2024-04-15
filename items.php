<?php

class items {

    private $id;
    private $name;
    private $price;
    
    //constructor to initiliaze class data members
    public function __construct($id,$name,$price){
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;

    }

    // Method to get Id
    public function getId(){
        return $this->id;
    }

    //Method to get Name
    public function getName(){
        return $this->name;
    }

    //Method to get Price
    public function getPrice(){
        return $this->price;
    }

    }// end of class

    $item = new items(1,"Bike",1000);

    echo "ID:" . $item->getId() . "<br>";
    echo "Name:" . $item->getName() . "<br>";
    echo "Price:" . $item->getPrice() . "<br>";



?>