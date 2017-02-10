<?php
    class Contact
    {   // Contact properties
        private $name;
        private $address;
        private $phone_number;

        // Contact constructor
        function __construct($new_name, $new_address, $new_phone_number)
        {
            $this->name = $new_name;
            $this->address = $new_address;
            $this->phone_number = $new_phone_number;
        }

        // Setters and Getters for Contact properties
        function setName($new_name)
        {
            $this->name = (string) $new_name;
        }

        function getName()
        {
            return $this->name;
        }

        function setAddress($new_address)
        {
            $this->address = (string) $new_address;
        }

        function getAddress()
        {
            return $this->address;
        }

        function setPhoneNumber($new_phone_number)
        {
            $this->phone_number = (string) $new_phone_number;
        }

        function getPhoneNumber()
        {
            return $this->phone_number;
        }

        function save()
        {
            array_push($_SESSION['list_of_contacts'], $this);
        }

        // Super-global functions
        static function getAll()
        {
            return $_SESSION['list_of_contacts'];
        }

        static function deleteAll()
        {
            return $_SESSION['list_of_contacts'] = [];
        }

    }
?>
