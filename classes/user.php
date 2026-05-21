<?php
    class User{
        public $name;
        public $email;
        public $genre;
        public function __construct(){
            $this->name  = "";
            $this->email = "";
            $this->genre = "";
        }
        public function setName($name): void{
            $this->name = $name;

        }
        public function setEmail($email): void {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                throw new Exception("Invalid email format");
            }
            $this->email = $email;
        }
        public function setGenre($genre): void{
            $this->genre = $genre;

        }
        public function getName(): string {
            return $this->name;
        }
        public function getEmail(): string {
            return $this->email;
        }
        public function getGenre(): string {
            return $this->genre;
        }

    }
?>