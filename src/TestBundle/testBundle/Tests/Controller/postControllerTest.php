<?php

namespace TestBundle\testBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class postControllerTest extends WebTestCase
{
    public function testComment()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/comment');
    }

}
