<?php

namespace ContactBundle\Handler;

use Doctrine\Common\Persistence\ObjectManager;

use Symfony\Component\Form\FormFactoryInterface;

use ContactBundle\Form\ContactType;
use ContactBundle\Model\ContactInterface;
use ContactBundle\Exception\InvalidFormException;

class ContactHandler implements ContactHandlerInterface
{

	private $om;
	private $entityClass;
	private $repository;
	private $formFactory;

	public function __construct(ObjectManager $om, $entityClass, FormFactoryInterface $formFactory)
	{
		$this->om = $om;
		$this->entityClass = $entityClass;
		$this->repository = $this->om->getRepository($this->entityClass);
		$this->formFactory = $formFactory;
	}

	public function get($id)
	{
		return $this->repository->find($id);
	}

	public function all($limit = 5, $offset = 0)
	{
		return $this->repository->findBy(array(),null, $limit, $offset);
	}

	public function post(array $parameters)
	{
		$contact = $this->createContact();

		return $this->processForm($contact, $parameters, 'POST');
	}

	public function put(ContactInterface $contact, array $parameters)
	{
		
		return $this->processForm($contact, $parameters, 'PUT');
	}

	// public function patch(ContactInterface $contact, array $parameters)
	// {
	// 	return $this->processForm($contact, $parameters, 'PATCH');
	// }

	public function delete(ContactInterface $contact)
	{
		$this->om->remove($contact);
		$this->om->flush($contact);
	}

	public function processForm(ContactInterface $contact, array $parameters, $method)
	{
		$form = $this->formFactory->create(new ContactType(), $contact, array('method'=> $method));
		$form->submit($parameters);
		if($form->isValid()){
			$contact = $form->getData();
			$this->om->persist($contact);
			$this->om->flush($contact);

			return $contact;
		}

		throw new InvalidFormException('Invalid submitted data', $form);
	}

	private function createContact()
	{
		return new $this->entityClass();
	}

}