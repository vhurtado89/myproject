<?php

namespace ContactBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ContactController extends Controller
{
    /**
     * @Route("/contacts")
     * @Template()
     */
    public function getAllContactsAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/contacts/{id}")
     * @Template()
     */
    public function getSingleContactAction($id)
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/contacts")
     * @Template()
     */
    public function createContactAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/contacts/{id}")
     * @Template()
     */
    public function updateContactAction($id)
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/contacts/{id}")
     * @Template()
     */
    public function deleteContactAction($id)
    {
        return array(
                // ...
            );    }

}
