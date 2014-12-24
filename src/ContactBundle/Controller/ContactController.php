<?php

namespace ContactBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations;
use FOS\RestBundle\View\View;
use FOS\RestBundle\Util\Codes;
use FOS\RestBundle\Request\ParamFetcherInterface;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Nelmio\ApiDocBundle\Annotation\ApiDoc;

use ContactBundle\Model\ContactInterface;
use ContactBundle\Form\ContactType;
use ContactBundle\Exception\InvalidFormException;

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
    *List All Contacts
    *
    *@ApiDoc(
    *	resource = true,
    *	statusCodes = {
	*		200 = "Returned when successful"
    *		}
    *	)
    *
    *@Annotations\QueryParam(name="offset", requirements="\d+", nullable=true, description="Offset from which to start listing contacts.")
    *@Annotations\QueryParam(name="limit", requirements="\d+", default=true,) description="how many contacts to return")
    *
	*@Annotations\View(
	*	templateVar="contacts")
	*
	*@param request 			  $request 		the request object
	*@param ParamFetcherInterface $paramFetcher param fetcher service
	*
	*@return array
    */
    public function getContactsAction(Request $request, ParamFetcherInterface $paramFetcher)
    {
    	$offset = $paramFetcher->get('offset');
    	$offset = null == $offset ? 0 : $offset;
    	$limit = $paramFetcher->get('limit');

    	return $this->container->get('contact_blog.contact.handler')->all($limit, $offset);

    }

    /**
    *Create Contact Page from submitted data
    *
    *@ApiDoc(
    *	resource = true,
    *	description = "Creates a new contact from the submitted data",
    *	input = "ContactBUndle\Form\ContactType",
    *	statusCodes = {
    *		200 = "Returned when successful",
    *		400 = "Returned when the form has errors"
    *	}
    *)
    *
    *@Annotations\View(
    *	template = "ContactBundle:Contact:newContact.html.twig",
    *	statusCode = Codes::HTTP_BAD_REQUEST,
    *	templateVar = "form"
    *)
    *
    *@param Request $request the request object
    *
    *@return FormTypeInterface|View
    */
    public function postContactAction(Request $request)
    {
    	try{
            $form = new ContactType();
    		$newContact = $this->container->get('contact_blog.contact.handler')->post(
    			$request->request->all()
    		);
    		$routeOptions = array(
    			'id'=> $newContact->getId(),
    			'_format'=>$request->get('_format')
    		);
    		return $this->routeRedirectView('api_1_get_contact', $routeOptions, Codes::HTTP_CREATED);
    	}catch (InvalidFormException $exception)
    	{
    		return $exception->getForm();
    	}
    }
    /**
    *Presents the form to use to create a new contact
    *
    *@ApiDoc(
    *	resource = true,
    *	statusCodes = {
    *		200 = "Returned when successful."
    *	}
    *)
    *
    *@Annotations\View()
    *
    *@return FormTypeInterface
    */
    public function newContactAction()
    {
    	return $this->createForm(new ContactType());
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
