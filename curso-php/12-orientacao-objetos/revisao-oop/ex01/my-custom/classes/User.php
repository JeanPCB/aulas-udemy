<?php
    class User {
        private $nickname;
        private $password;
        protected $plan = 'Standard';

        public function __construct($nickname, $password) {
            $this->nickname = $nickname;
            $this->password = $password;
        }

        public function changeNick($newNick) {
            return $this->nickname = $newNick;
        }

        public function getNick() {
            return $this->nickname;
        }

        public function getPass() {
            return $this->password;
        }

        public function setPlan($plan) {
            $this->plan = $plan;
        }

        public function getPlan() {
            return $this->plan;
        }
    }