<?php

namespace Dsbaars\Bundle\BetterpressBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SidebarControllerTest extends WebTestCase
{
    public function testSearch()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/search');
    }

    public function testRecentposts()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/recentPosts');
    }

    public function testRecentcomments()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/recentComments');
    }

    public function testArchives()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/archives');
    }

    public function testCategories()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/categories');
    }

    public function testMeta()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/meta');
    }

}
