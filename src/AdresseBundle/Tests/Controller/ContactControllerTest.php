<?php

namespace AdresseBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ContactControllerTest extends WebTestCase
{
    public function testAjout()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/gestion_{id}');
    }

    public function testModification()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/gestion_{id}');
    }

    public function testSuppression()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/supr_{id}');
    }

}
