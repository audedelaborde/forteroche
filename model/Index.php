<?php

class IndexModel
{

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

}