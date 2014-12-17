<?php

namespace ContactBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ContactControllerTest extends WebTestCase
{
    public function testGetallcontacts()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/contacts');
    }

    public function testGetsinglecontact()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/contacts/{id}');
    }

    public function testCreatecontact()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/contacts');
    }

    public function testUpdatecontact()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/contacts/{id}');
    }

    public function testDeletecontact()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/contacts/{id}');
    }

}
