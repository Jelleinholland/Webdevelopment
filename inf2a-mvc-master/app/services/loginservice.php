<?php
require __DIR__ . '/../repositories/loginrepository.php';

class Loginservice {
    public function AttemptToLogin($Username, $Password) {
        $repository = new Loginrepository();
        return $repository->AttemptToLogin($Username, $Password);
    }
}