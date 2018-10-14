<?php

//require('Index.php');

class Post 
{
	private $id;
	private $title;
	private $content;

	public function __construct(array $post)
	{
		$this->fromArray($post);
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


	public function setId($id)
	{
		$this->id = $id;
		return $this;
	}

	public function getId()
	{
		return $this->id;
	}

	public function setTitle($title)
	{
		$this->title = $title;
		return $this;
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function setContent($content)
	{
		$this->content = $content;
		return $this;
	}
	public function getContent(){
		return $this->content;
	}
}