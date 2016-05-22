<?php

namespace Dsbaars\Bundle\BetterpressBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use JMS\DiExtraBundle\Annotation as DI;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class SidebarController extends Controller
{
    /**
     * @DI\Inject("doctrine.orm.entity_manager")
     * @var
     */
    protected $em;

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
     * @Template("DsbaarsBetterpressBundle:Sidebar:recent_posts.html.twig")
     */
    public function recentPostsAction($max = 3)
    {
        $posts = $this->em->getRepository('DsbaarsBetterpressBundle:Post')->findAll();

        return array(
            'posts' => $posts
        );
    }

    /**
     * @Route("/recentComments")
     * @Template("DsbaarsBetterpressBundle:Sidebar:recent_comments.html.twig")
     */
    public function recentCommentsAction()
    {
        return array(
            'comments' => array()
        );
    }

    /**
     * @Route("/archives")
     * @Template("DsbaarsBetterpressBundle:Sidebar:archives.html.twig")
     */
    public function archivesAction()
    {
        $posts = $this->em->getRepository('DsbaarsBetterpressBundle:Post')->findAll();

        return array(
            'posts' => $posts
        );
    }

    /**
     * @Route("/categories")
     * @Template("DsbaarsBetterpressBundle:Sidebar:categories.html.twig")
     */
    public function categoriesAction()
    {
        return array(
            'categories' => array()
        );
    }

    /**
     * @Route("/meta")
     * @Template("DsbaarsBetterpressBundle:Sidebar:meta.html.twig")
     */
    public function metaAction()
    {
        return array(
            'links' => array(
                'Site Admin',
                'Entries RSS',
                'Comments RSS',
                'BetterPress on GitHub'
            )
        );
    }

}
