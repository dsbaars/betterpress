<?php
/**
 * Created by IntelliJ IDEA.
 * User: djuribaars
 * Date: 22/05/16
 * Time: 22:54
 */

namespace Dsbaars\Bundle\BetterpressBundle\Menu;

use Knp\Menu\FactoryInterface;

class MenuBuilder
{
    private $factory;

    /**
     * @param FactoryInterface $factory
     *
     * Add any other dependency you need
     */
    public function __construct(FactoryInterface $factory)
    {
        $this->factory = $factory;
    }

    public function createMainMenu(array $options)
    {
        $menu = $this->factory->createItem('root', array(
            'childrenAttributes'    => array(
                'class'             => 'primary-menu',
            ),
        ));

        $menu->addChild('Home', array('route' => 'home'));
        // ... add more children

        return $menu;
    }

    public function createSocialMenu(array $options)
    {
        $menu = $this->factory->createItem('root', array(
            'childrenAttributes'    => array(
                'class'             => 'social-links-menu',
            ),
        ));

        #$menu->setAttribute('class', 'social-links-menu');

        $menu->addChild('Twitter', array('uri' => 'http://www.twitter.com/dsbaars'));
        $menu->addChild('LinkedIn', array('uri' => 'http://linkedin.com/in/dsbaars'));
        $menu->addChild('GitHub', array('uri' => 'http://github.com/dsbaars'));

        return $menu;
    }
}