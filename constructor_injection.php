<?php

/**
 * This expmple explains how we can crate constroctor level depedency 
 * 
 */
class User{

    private $database = null;

    /**
     * We are now injecting it into the constructor, that's it:
     */
    public function __construct(Database $database){
        $this->database = $database;
    }


    public function getUsers(){
        return $this->database->getAll('users');
    }
}


/**
 * Calling the mehtods 
 * Passing database object into the user class, so in future if we change Database to some oher database we dont need to go to all the classes and change anything
 * This makes our code modular 
 */
$database = new Database('host', 'user', 'pass', 'dbname');
$user = new User($database);
$user->getUsers();