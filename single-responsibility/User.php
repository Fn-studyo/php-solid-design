<?php

//The Single Responsibility Principle states that a class
// should do one thing, and therefore it should
// have only a single reason to change.

class User {

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function create(array $data)
    {
        try{
            //...save user to db
        }catch(DatabaseException $e){
            $this->logError($e->getMessage());
        }
    }

    public function logError()
    {
        $this->logger->writeTofile();
    }
}
