<?php

namespace Dsbaars\Bundle\ManageBundle\ApiController;

use FOS\RestBundle\Controller\Annotations\Delete;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\Post;
use FOS\RestBundle\Controller\Annotations\Prefix;
use FOS\RestBundle\Controller\Annotations\Route;
use FOS\RestBundle\Controller\Annotations\View;
use FOS\RestBundle\Controller\Annotations\Patch;
use FOS\RestBundle\Controller\FOSRestController;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations\Version;
use JMS\DiExtraBundle\Annotation as DI;

/**
 * Class PostController
 * @package Dsbaars\Bundle\ManageBundle\ApiController
 * @Prefix("post")
 * @Route("post")
 * @Version("v0")
 * @ApiDoc(section="Post")
 */
class PostController extends FOSRestController
{
    /**
     * @DI\Inject("doctrine.orm.entity_manager")
     * @var
     */
    protected $em;

    /**
     * @ApiDoc()
     * @View()
     * @Get(options={"expose"=true})
     */
    public function getAction()
    {
        $posts = $this->em->getRepository('DsbaarsBetterpressBundle:Post')->findAll();

        return array(
            'posts' => $posts
        );
    }

    /**
     * @ApiDoc()
     * @View()
     * @Post(options={"expose"=true})
     */
    public function postAction()
    {

    }

    /**
     * @ApiDoc()
     * @View()
     * @Patch(options={"expose"=true})
     */
    public function patchAction()
    {

    }

    /**
     * @ApiDoc()
     * @View()
     * @Delete(options={"expose"=true})
     */
    public function deleteAction()
    {

    }
}
