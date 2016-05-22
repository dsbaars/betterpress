<?php

namespace Dsbaars\Bundle\BetterpressBundle\Twig\Extension;

use Twig_SimpleFunction;

class BetterpressExtensions extends \Twig_Extension
{
    public function getFunctions()
    {
        return array(
            new Twig_SimpleFunction('has_nav_menu', array($this, 'hasNavMenuFunction')),
            new Twig_SimpleFunction('have_posts', array($this, 'hasNavMenuFunction')),
            new Twig_SimpleFunction('is_frontpage', array($this, 'isFrontpage')),
            new Twig_SimpleFunction('is_home', array($this, 'isHome')),
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'betterpress_extensions';
    }

    public function hasNavMenuFunction()
    {
        return false;
    }

    public function isHome()
    {
        return true;
    }

    public function isFrontpage()
    {
        return true;
    }
}
