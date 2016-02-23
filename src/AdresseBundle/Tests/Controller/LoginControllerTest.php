<?php

namespace AdresseBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class LoginControllerTest extends WebTestCase
{
    public function testConnexion()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/connexion');
    }

    public function testDeconnection()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/deconnection');
    }

}
