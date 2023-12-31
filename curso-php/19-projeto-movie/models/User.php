<?php
    class User {
        public $id;
        public $name;
        public $lastname;
        public $email;
        public $password;
        public $image;
        public $bio;
        public $token;

        public function generateToken(){
            return bin2hex(random_bytes(50));
        }

        public function hashPassword($password) {
            return password_hash($password, PASSWORD_DEFAULT);
        }
    }

    interface UserDAOInterface {
        public function buildUser($data);
        public function createUser(User $user, $authUser = false);
        public function setTokenToSession($token, $redirect = true);
        public function verifyToken($protected = true);
        public function destroyToken();
        public function findByToken($token);
        public function findByEmail($email);
    }