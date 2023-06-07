<?php

class DataBase
{
    public $connection;
    public function __construct()
    {
        $configDB = 'mysql:host=localhost;port=3306;dbname=hotel_miranda;user=root;password=1234;charset=utf8';

        $this -> connection = new PDO($configDB);
    }
    public function query($query)
    {
        $statament = $this-> connection->prepare($query);
        
        $statament->execute();
        
        $posts = $statament->fetchAll(PDO::FETCH_ASSOC);

        return $posts;
    }
}



