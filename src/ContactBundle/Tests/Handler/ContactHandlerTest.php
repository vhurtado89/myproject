<?php

namespace ContactBundle\Tests\Handler;

// use ContactBundle\Handler\ContactHandler;
// use ContactBundle\Model\ContactInterface;
// use ContactBundle\Entity\Contact;

class ContactHandlerTest //extends \PHPUnit_Framework_TestCase
{
	// const CONTACT_CLASS = 'ContactBundle\Tests\Handler\DummyContact';

	// /** @var PageHandler */
	// protected $pageHandler;
	// * @var \PHPUnit_Framework_MockObject_MockObject 
	// protected $om;
	// /** @var \PHPUnit_Framework_MockObject_MockObject */
	// protected $repository;

	
	public function testGet()
	{
		$id = 1;
		$contact = $this->getContact();
		$this->repository->expects($this->once())
			->method('find')
			->with($this->equalTo($id))
			->will($this->returnValue($page));
		$this->contactHandler->get($id);
	}

	// public function testAll()
	// {
	// 	$offset = 1;
	// 	$limit = 2;

	// 	$contacts = $this->getContacts(2);
	// 	$this->repository->expects($this->once())->method('findBy')
	// 		->with(array(), null, $limit, $offset)
	// 		->will($this->returnValue($contacts));

	// 	$this->contactHandler = $this->createContactHandler($this->om, static::CONTACT_CLASS, $this->formFactory);

	// 	$all= $this->contactHandler->all($limit, $offset);

	// 	$this->assertEquals($contacts, $all);
	// }

	// protected function createContactHandler($objectManager, $pageClass, $formFactory)
	// {
	// 	return new ContactHandler($objectManager,$pageClass, $formFactory);
	// }

	// public function getContact()
	// {
	// 	$contactClass = static::CONTACT_CLASS;
	// 	return new $contactClass();
	// }

	// public function getContacts($maxContacts = 5)
	// {
	// 	$contacts = array();
	// 	for($i =0; $i<$maxContacts; $i++)
	// 	{
	// 		$contacts[]=$this->getContact();
	// 	}

	// 	return $contacts;
	// }
}