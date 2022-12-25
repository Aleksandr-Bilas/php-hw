<?php
class Contact
{
    private $name;
    private $surname;
    private $email;
    private $phone;
    private $address;

    public function __construct(ContactBuilder $builder)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
        $this->phone = $phone;
        $this->address = $address;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function getAddress()
    {
        return $this->address;
    }

}

class ContactBuilder
{
    private $name, $surname, $email, $phone, $address;
    public function __conctruct($name, $surname, $email, $phone, $address)
    {
        $this->setName($name)->setSurname($surname)->setEmail($email)->setPhone($phone)->setAddress($address);
    }

    private function setName($name)
    {
        $this->name=$name;
        return $this;
    }


    private function setSurname($surname)
    {
        $this->surname=$surname;
        return $this;
    }

    private function setEmail($email)
    {
        $this->email=$email;
        return $this;
    }

    private function setPhone($phone)
    {
        $this->phone=$phone;
        return $this;
    }

    private function setAddress($address)
    {
        $this->address=$address;
        return $this;
    }

}


$newContact = (new Contact())
    ->phone('3801234567')
    ->name("Petro")
    ->surname("Petrov")
    ->email("petro@gmail.com")
    ->address("Kiyv, Ukraine")
    ->build();