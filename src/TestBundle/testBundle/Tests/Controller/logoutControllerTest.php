<?php

namespace TestBundle\testBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class logoutControllerTest extends WebTestCase
{
    public function testOut()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/out');
    }

}
