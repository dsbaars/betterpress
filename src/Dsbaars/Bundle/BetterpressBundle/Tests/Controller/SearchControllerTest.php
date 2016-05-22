<?php

namespace Dsbaars\Bundle\BetterpressBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SearchControllerTest extends WebTestCase
{
    public function testSearch()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/search');
    }

    public function testResults()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/results');
    }

}
