<?php

namespace ContactBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use ContactBundle\Model\ContactInterface;

/**
 * Contact
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Contact implements ContactInterface
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=25)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=25)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="address1", type="string", length=25)
     */
    private $address1;

    /**
     * @var string
     *
     * @ORM\Column(name="address2", type="string", length=25)
     */
    private $address2;

    /**
     * @var string
     *
     * @ORM\Column(name="email1", type="string", length=25)
     */
    private $email1;

    /**
     * @var string
     *
     * @ORM\Column(name="email2", type="string", length=25)
     */
    private $email2;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=25)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="string", length=2)
     */
    private $state;

    /**
     * @var integer
     *
     * @ORM\Column(name="zip", type="integer")
     */
    private $zip;

    /**
     * @var integer
     *
     * @ORM\Column(name="phone1", type="integer")
     */
    private $phone1;

    /**
     * @var integer
     *
     * @ORM\Column(name="phone2", type="integer")
     */
    private $phone2;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     * @return Contact
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return Contact
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string 
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set address1
     *
     * @param string $address1
     * @return Contact
     */
    public function setAddress1($address1)
    {
        $this->address1 = $address1;

        return $this;
    }

    /**
     * Get address1
     *
     * @return string 
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * Set address2
     *
     * @param string $address2
     * @return Contact
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;

        return $this;
    }

    /**
     * Get address2
     *
     * @return string 
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * Set email1
     *
     * @param string $email1
     * @return Contact
     */
    public function setEmail1($email1)
    {
        $this->email1 = $email1;

        return $this;
    }

    /**
     * Get email1
     *
     * @return string 
     */
    public function getEmail1()
    {
        return $this->email1;
    }

    /**
     * Set email2
     *
     * @param string $email2
     * @return Contact
     */
    public function setEmail2($email2)
    {
        $this->email2 = $email2;

        return $this;
    }

    /**
     * Get email2
     *
     * @return string 
     */
    public function getEmail2()
    {
        return $this->email2;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Contact
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set state
     *
     * @param string $state
     * @return Contact
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string 
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set zip
     *
     * @param integer $zip
     * @return Contact
     */
    public function setZip($zip)
    {
        $this->zip = $zip;

        return $this;
    }

    /**
     * Get zip
     *
     * @return integer 
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Set phone1
     *
     * @param integer $phone1
     * @return Contact
     */
    public function setPhone1($phone1)
    {
        $this->phone1 = $phone1;

        return $this;
    }

    /**
     * Get phone1
     *
     * @return integer 
     */
    public function getPhone1()
    {
        return $this->phone1;
    }

    /**
     * Set phone2
     *
     * @param integer $phone2
     * @return Contact
     */
    public function setPhone2($phone2)
    {
        $this->phone2 = $phone2;

        return $this;
    }

    /**
     * Get phone2
     *
     * @return integer 
     */
    public function getPhone2()
    {
        return $this->phone2;
    }
}
