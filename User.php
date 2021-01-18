<?php
    class User {
        private $lastname;
        private $name;
        private $email;
        private $password;
        private $description;
        private $nickname;

        function __construct($_name, $_lastname, $_email, $_password, $_nickname) {
            $this -> lastname = $_lastname;
            $this -> name = $_name;
            $this -> email = $_email;
            $this -> password = $_password;
            $this -> nickname = $_nickname;
        }

        public function setDescription($_description) {
            $this -> description = $_description;
        }

        public function getDescription() {
            return $this -> description;
        }

        public function getAllData() {
            return get_object_vars($this);
        }
    };
?>
