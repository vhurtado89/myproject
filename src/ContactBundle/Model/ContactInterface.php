<?php

namespace ContactBundle\Model;

Interface ContactInterface
{
	 /**
     * Get id
     *
     * @return integer 
     */
    public function getId();

    /**
     * Set firstname
     *
     * @param string $firstname
     * @return Contact
     */
    public function setFirstname($firstname);


    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname();


    /**
     * Set lastname
     *
     * @param string $lastname
     * @return Contact
     */
    public function setLastname($lastname);


    /**
     * Get lastname
     *
     * @return string 
     */
    public function getLastname();


    /**
     * Set address1
     *
     * @param string $address1
     * @return Contact
     */
    public function setAddress1($address1);


    /**
     * Get address1
     *
     * @return string 
     */
    public function getAddress1();


    /**
     * Set address2
     *
     * @param string $address2
     * @return Contact
     */
    public function setAddress2($address2);


    /**
     * Get address2
     *
     * @return string 
     */
    public function getAddress2();


    /**
     * Set email1
     *
     * @param string $email1
     * @return Contact
     */
    public function setEmail1($email1);


    /**
     * Get email1
     *
     * @return string 
     */
    public function getEmail1();


    /**
     * Set email2
     *
     * @param string $email2
     * @return Contact
     */
    public function setEmail2($email2);


    /**
     * Get email2
     *
     * @return string 
     */
    public function getEmail2();


    /**
     * Set city
     *
     * @param string $city
     * @return Contact
     */
    public function setCity($city);


    /**
     * Get city
     *
     * @return string 
     */
    public function getCity();
 

    /**
     * Set state
     *
     * @param string $state
     * @return Contact
     */
    public function setState($state);


    /**
     * Get state
     *
     * @return string 
     */
    public function getState();


    /**
     * Set zip
     *
     * @param integer $zip
     * @return Contact
     */
    public function setZip($zip);

    /**
     * Get zip
     *
     * @return integer 
     */
    public function getZip();


    /**
     * Set phone1
     *
     * @param integer $phone1
     * @return Contact
     */
    public function setPhone1($phone1);
 

    /**
     * Get phone1
     *
     * @return integer 
     */
    public function getPhone1();


    /**
     * Set phone2
     *
     * @param integer $phone2
     * @return Contact
     */
    public function setPhone2($phone2);


    /**
     * Get phone2
     *
     * @return integer 
     */
    public function getPhone2();

}