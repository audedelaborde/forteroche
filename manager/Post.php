<?php

require('Database.php');
require __DIR__ . ('/../model/Post.php');

class PostManager extends Database
{
	function getPosts()
	{
		$posts = [];

	    $req = $this->db()->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY creation_date DESC LIMIT 0, 5');

	    $req->execute();
    	$result = $req->fetchAll(PDO::FETCH_ASSOC);

    	foreach ($result as $post) {
    		$posts[] = new Post($post);
    	}

	    return $posts;
	}
}