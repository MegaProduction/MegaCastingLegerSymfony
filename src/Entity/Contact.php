<?php

namespace App\Entity;

use App\Repository\ContactRepository;

class Contact
{
    private $firstName;
    private $name;
    private $mail;
    private $address;
    private $object;
    private $message;


    /**
     * @return firstName
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param $firstName
     */
    public function setFirstName($firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mail
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @param $mail
     */
    public function setMail($mail): void
    {
        $this->mail = $mail;
    }

    /**
     * @return address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param $address
     */
    public function setAddress($address): void
    {
        $this->address = $address;
    }

    /**
     * @return object
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * @param $object
     */
    public function setObject($object): void
    {
        $this->object = $object;
    }

    /**
     * @return message
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param $message
     */
    public function setMessage($message): void
    {
        $this->message = $message;
    }
}
