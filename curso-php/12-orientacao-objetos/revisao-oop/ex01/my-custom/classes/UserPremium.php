<?php
    require_once './my-custom/classes/User.php';

    class UserPremium extends User {
        public function setPremium() {
            $this->plan = 'Premium';
        }
    }