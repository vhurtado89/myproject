<?php

namespace ContactBundle\Tests\Fixtures\Entity;

use ContactBundle\Entity\Contact;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadContactData implements FixtureInterface
{
	static public $contacts= array();

	public function load(ObjectManager $manager)
	{
		$contact = new Contact();
		$contact->setFirstname('firstname');
		$contact->setLastname('lastname');
		$contact->setAddress1('address1');
		$contact->setAddress2('address2');
		$contact->setEmail1('email1');
		$contact->setEmail2('email2');
		$contact->setCity('City');
		$contact->setState('st');
		$contact->setZip(93543);
		$contact->setPhone1(5555555555);
		$contact->setPhone2(6666666666);

		$manager->persist($contact);
		$manager->flush();

		self::$contacts[] = $contact;

	}
}
