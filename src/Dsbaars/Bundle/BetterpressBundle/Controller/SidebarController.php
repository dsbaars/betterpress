<?php

namespace Dsbaars\Bundle\BetterpressBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class SidebarController extends Controller
{
    /**
     * @Route("/search")
     */
    public function searchAction()
    {
        return $this->render('DsbaarsBetterpressBundle:Sidebar:search.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/recentPosts")
     */
    public function recentPostsAction()
    {
        return $this->render('DsbaarsBetterpressBundle:Sidebar:recent_posts.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/recentComments")
     */
    public function recentCommentsAction()
    {
        return $this->render('DsbaarsBetterpressBundle:Sidebar:recent_comments.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/archives")
     */
    public function archivesAction()
    {
        return $this->render('DsbaarsBetterpressBundle:Sidebar:archives.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/categories")
     */
    public function categoriesAction()
    {
        return $this->render('DsbaarsBetterpressBundle:Sidebar:categories.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/meta")
     */
    public function metaAction()
    {
        return $this->render('DsbaarsBetterpressBundle:Sidebar:meta.html.twig', array(
            // ...
        ));
    }

}
