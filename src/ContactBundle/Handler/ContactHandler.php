<?php

namespace ContactBundle\Handler;

use Doctrine\Common\Persistence\ObjectManager;
use ContactBundle\Model\ContactInterface;


class ContactHandler implements ContactHandlerInterface
{

	private $om;
	private $entityClass;
	private $repository;

	public function __construct(ObjectManager $om, $entityClass)
	{
		$this->om = $om;
		$this->entityClass = $entityClass;
		$this->repository = $this->om->getRepository($this->entityClass);
	}

	public function get($id)
	{
		return $this->repository->find($id);
	}

}
