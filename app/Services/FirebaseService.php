<?php

namespace App\Services;

use Kreait\Firebase\Factory;

class FirebaseService
{
    protected $auth;
    protected $database;

    public function __construct()
    {
        $factory = (new Factory)
            ->withServiceAccount(base_path('storage\firebase\paysada-tracking-firebase-adminsdk-m2bzb-21d6de2f84.json')) // Download your Firebase service account JSON and place it here
            ->withDatabaseUri(env('FIREBASE_DATABASE_URL'));

        $this->auth = $factory->createAuth();
        $this->database = $factory->createDatabase();
    }

    public function getAuth()
    {
        return $this->auth;
    }

    public function getDatabase()
    {
        return $this->database;
    }
}
