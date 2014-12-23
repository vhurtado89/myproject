<?php

namespace ContactBundle\Handler;

use ContactBundle\Model\ContactInterface;

interface ContactHandlerInterface
{
	/**
	*Get a Contact given the identifier
	*
	* @api
	*
	*@param mixed $id
	*
	*@return ContactInterface
	*/
	public function get($id);
}

