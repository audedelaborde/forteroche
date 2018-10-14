<?php

require('Database.php');
require __DIR__ . ('/../model/Post.php');

class CommentManager extends Database
{
	function getComments($postId)
	{
		$comments = [];

	    $req = $this->db()->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE post_id = ? ORDER BY comment_date DESC');

	    $req->execute();
    	$result = $req->fetchAll(PDO::FETCH_ASSOC);

    	foreach ($result as $comment) {
    		$comments[] = new Comment($comment);
    	}

	    return $comments;
	}

	function postComment($postId, $author, $comment)
	{
	    $comments = $db->prepare('INSERT INTO comments(post_id, author, comment, comment_date) VALUES(?, ?, ?, NOW())');
	    $affectedLines = $comments->execute(array($postId, $author, $comment));

	    return $affectedLines;
	}

	function deleteComment()
	{

	}

	function reportComment()
	{

	}
	
}