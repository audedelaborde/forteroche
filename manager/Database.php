<?php

class Database
{
	protected function dbConnect()
	{
	    // $db = new PDO('mysql:host=db752910020.db.1and1.com;dbname=db752910020;charset=utf8', 'dbo752910020', 'Forteroche1!');
	    // return $db;

	    $db = new PDO('mysql:host=localhost;dbname=db752910020;charset=utf8', 'root', 'root');
	    return $db;
	}

	protected function db()
	{
		return $this->dbConnect();
	}

}