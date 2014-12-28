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
	 
	 /**
	 *Edit contact or create if it doesn't exist
	 *
	 *@param ContactInterface $contact
	 *@param array            $parameter
	 *
	 *@return ContactInterface 
	 */
	 public function put(ContactInterface $contact, array $paramters);

	 /**
	 *Partially update a Contact 
	 *
	 *@param ContactInterface $contact
	 *@param array            $parameters
	 *
	 *@return ContactInterface
	 */
	 public function patch(ContactInterface $contact, array $parameters);

	  /**
	 *Delete Contact 
	 *
	 *@param ContactInterface $contact
	 *
	 */
	  public function delete(ContactInterface $contact);
}

