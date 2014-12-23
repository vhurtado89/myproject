<?php

namespace ContactBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations;
use FOS\RestBundle\View\View;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Nelmio\ApiDocBundle\Annotation\ApiDoc;

class ContactController extends FOSRestController
{


	/**
	 * Get single Contact,
	 *
	 * @ApiDoc(
	 *   resource = true,
	 *   description = "Gets a Contact for a given id",
	 *   output = "Contact\Entity\Contact",
	 *   statusCodes = {
	 *     200 = "Returned when successful",
	 *     404 = "Returned when the Contact is not found"
	 *   }
	 * )
	 *
	 * @Annotations\View(templateVar="contact")
	 *
	 * @param Request $request the request object
	 * @param int     $id      the contact id
	 *
	 * @return array
	 *
	 * @throws NotFoundHttpException when contact not exist
	 */
    public function getContactAction($id) 
    {
        $contact= $this->getOr404($id);

        return $contact;
    }

    /**
	* Fetch a Contact or throw an 404 Exception.
	*
	* @param mixed $id
	*
	* @return ContactInterface
	*
	* @throws NotFoundHttpException
	*/
	protected function getOr404($id)
	{
		if (!($contact = $this->container->get('contact_blog.contact.handler')->get($id)))
		{
			throw new NotFoundHttpException(sprintf('The resource \'%s\' was not found.',$id));
		}
		return $contact;
	}
   

}
