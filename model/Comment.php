<?php

class Comment 
{
	private $id;
	private $post_id;
	private $author;
	private $comment;
	private $comment_date;

	public function __construct(array $comment)
	{
		$this->fromArray($comment);
	}

	 protected function fromArray(array $params)
    {
        foreach ($params as $name => $value) {
            $setter = 'set' . ucfirst($name);
            if (method_exists($this, $setter)) {
                $this->$setter($value);
            }
        }
        return $this;
    }

 //    function getComments($postId)
	// {
	//     $db = dbConnect();
	//     $comments = $db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE post_id = ? ORDER BY comment_date DESC');
	//     $comments->execute(array($postId));

	//     return $comments;
	// }


	// function postComment($postId, $author, $comment)
	// {
	//     $db = dbConnect();
	//     $comments = $db->prepare('INSERT INTO comments(post_id, author, comment, comment_date) VALUES(?, ?, ?, NOW())');
	//     $affectedLines = $comments->execute(array($postId, $author, $comment));


	public function setId($id)
	{
		$this->id = $id;
		return $this;
	}

	public function getId()
	{
		return $this->id;
	}

	public function setPostId($post_id)
	{
		$this->post_id = $post_id;
		return $this;
	}

	public function getPostId()
	{
		return $this->post_id;
	}

	public function setAuthor($author)
	{
		$this->author = $author;
		return $this;
	}

	public function getAuthor()
	{
		return $this->author;
	}

	public function setComment($comment)
	{
		$this->comment = $comment;
		return $this;
	}
	public function getComment(){
		return $this->comment;
	}

	public function setCommentDate($comment_date)
	{
		$this->comment_date = $comment_date;
		return $this;
	}
	public function getComment(){
		return $this->comment_date;
	}
}
