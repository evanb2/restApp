<?php
    class Restaurant
    {
        private $name;
        private $address;
        private $description;
        private $id;
        private $cuisine_id;

        function __construct($name, $address, $description, $id = null, $cuisine_id)
        {
            $this->name = $name;
            $this->address = $address;
            $this->description = $description;
            $this->id = $id;
            $this->cuisine_id = $cuisine_id;
        }



    }
?>
