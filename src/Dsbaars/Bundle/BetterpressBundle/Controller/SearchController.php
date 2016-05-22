<?php

namespace Dsbaars\Bundle\BetterpressBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class SearchController extends Controller
{
    /**
     * @Route("/search")
     */
    public function searchAction()
    {
        return $this->render('DsbaarsBetterpressBundle:Search:search.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/results")
     */
    public function resultsAction()
    {
        return $this->render('DsbaarsBetterpressBundle:Search:results.html.twig', array(
            // ...
        ));
    }

}
