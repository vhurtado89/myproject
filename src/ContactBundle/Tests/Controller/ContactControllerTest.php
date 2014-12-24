<?php

namespace ContactBundle\Tests\Controller;

use Liip\FunctionalTestBundle\Test\WebTestCase as WebTestCase;
use ContactBundle\Tests\Fixtures\Entity\LoadContactData;

class ContactControllerTest extends WebTestCase
{
    public function setUp()
    {
        $this->auth = array(
            'PHP_AUTH_USER' => 'user',
            'PHP_AUTH_PW' => 'userpass',
        );
        $this->client = static::createClient(array(), $this->auth);
    }

    // public function testGet()
    // {
    //      $fixtures = array('ContactBundle\Tests\Fixtures\Entity\LoadContactData');
    //      $this->loadFixtures($fixtures);
    //      $contact = array_pop(LoadContactData::$contacts);

    //      $route =  $this->getUrl('api_1_get_contact', array('id' => $contact->getId(), '_format' => 'json'));
    //      $this->client->request('GET', $route);
    //      $response = $this->client->getResponse();
    //      $this->assertJsonResponse($response, 200);
    //      $content = $response->getContent();
     
    //      $decoded = json_decode($content, true);
    //      $this->assertTrue(isset($decoded['id']));
    // }

    public function testJSONPostContactAction()
    {
        //$this->client = static::createClient();
        // $this->client->request(
        //     'POST',
        //     '/api/contacts.json',
        //     array(),
        //     array(),
        //     array('CONTENT_TYPE' => 'application/json'),
        //     '{"firstname":"firstname1", "lastname":"lastname1", "address1":"address11", "address2":"address21",
        //         "email1":"email11", "email2":"email21", "city":"city1", "state":"st", "zip": "93543", "phone1":"999999",
        //         "phone2":"888888"}'
        // );
        // $this->assertJsonResponse($this->client->getResponse(), 201, false);
    }

    public function testJSONPostContactActionShouldReturn400WithBadParameters()
    {
        $this->client = static::createClient();
        $this->client->request(
            'POST',
            'api/contacts.json',
            array(),
            array(),
            array('CONTENT_TYPE'=> 'application/json'),
            '{"firstnames":"firstname1", "lastnames":"lastname1", "address1s":"address11", "address2s":"address21",
                "email1s":"email11", "email2s":"email21", "citys":"city1", "states":"state1", "zips": "zip1", "phone1s":"phone11",
                "phone2s":"phone21"}'
        );
        $this->assertJsonResponse($this->client->getResponse(), 400, false);
    }

    // public function testHeadRoute()
    // {
    //     $fixtures = array('ContactBundle\Tests\Fixtures\Entity\LoadContactData');
    //     $this->loadFixtures($fixtures);
    //     $contacts = LoadContactData::$contacts;
    //     $contact = array_pop($contacts);

    //     $this->client->request(
    //         'HEAD')
    // }

    // public function testNewPageAction()
    // {
    //     $this->client->request(
    //         'GET',
    //         'api/contacts/new.json',
    //         array(),
    //         array()
    //     );

    //     $this->assertJsonResponse($this->client->getResponse(),200,true);
    //     $this->assertEquals(
    //         '{"children":{"firstname":[],"lastname":[]}}',
    //         $this->client->getResponse()->getContent(),
    //         $this->client->getResponse()->getContent()
    //     );

    // }





     protected function assertJsonResponse(
        $response,
        $statusCode = 200,
        $checkValidJson = true,
        $contentType = 'application/json'
    )
    {
        $this->assertEquals(
        $statusCode, $response->getStatusCode(),
        $response->getContent()
        );
        $this->assertTrue(
        $response->headers->contains('Content-Type', $contentType),
        $response->headers
        );
        if ($checkValidJson) {
            $decode = json_decode($response->getContent());
            $this->assertTrue(($decode != null && $decode != false),
            'is response valid json: [' . $response->getContent() . ']'
            );
        }
     }

}
