<?php

namespace Dsbaars\Bundle\TwentySixteenBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use JMS\DiExtraBundle\Annotation as DI;

class DefaultController extends Controller
{
    /**
     * @DI\Inject("doctrine.orm.entity_manager")
     * @var
     */
    protected $em;

    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {
        $posts = $this->em->getRepository('DsbaarsBetterpressBundle:Post')->findAll();

        return array(
            'posts' => $posts
        );
    }
}
