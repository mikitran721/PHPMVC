<?php

class Patient{
    // Properties
    private $id;
    private $fullname;
    private $gender;
    private $dateOfBirth;
    private $address;
    private $mobile;

    // Methods
    public function __construct($id,$fullname,$gender,$dateOfBirth,$address,$mobile)
    {
        $this->id=$id;
        $this->fullname=$fullname;
        $this->gender=$gender;
        $this->dateOfBirth = $dateOfBirth;
        $this->address =$address;
        $this->mobile = $mobile;
    }

    // GETTERS
    public function getId(){
        return $this->id;
    }

    public function getFullname(){
        return $this->fullname;
    }
    public function getGender(){
        return $this->gender;
    }
    public function getDateOfBirth(){
        return $this->dateOfBirth;
    }
    public function getAddress(){
        return $this->address;
    }
    public function getMobile(){
        return $this->mobile;
    }
    //SETTER
    public function setFullname($fullname){
        $this->fullname=$fullname;
    }
}