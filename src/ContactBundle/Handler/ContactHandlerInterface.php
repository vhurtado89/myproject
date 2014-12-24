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

	/**
	*Get a list of Contacts
	*
	*@param int $limit the limit of the result
	*@param int $offset starting from the offset
	*
	*@return array
	*/
	public function all($limit = 5, $offset = 0);

	/**
	*Create new contact
	*
	*@param array $parameters
	*
	*@return ContactInterface
	*/
	public function post(array $parameters);
}

