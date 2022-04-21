<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        '_assetic_9eb932a' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '9eb932a',    'pos' => NULL,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/9eb932a.css',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_9eb932a_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '9eb932a',    'pos' => 0,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/9eb932a_bootstrap.min_1.css',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_b0d69ed' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'b0d69ed',    'pos' => NULL,    '_format' => 'png',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/images/b0d69ed.png',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_b0d69ed_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'b0d69ed',    'pos' => 0,    '_format' => 'png',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/images/b0d69ed_logo-xs_1.png',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_d07b8bb' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'd07b8bb',    'pos' => NULL,    '_format' => 'png',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/images/d07b8bb.png',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_d07b8bb_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'd07b8bb',    'pos' => 0,    '_format' => 'png',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/images/d07b8bb_logo_1.png',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_25cde44' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '25cde44',    'pos' => NULL,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/25cde44.css',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_25cde44_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '25cde44',    'pos' => 0,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/25cde44_style_003_1.css',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_25cde44_1' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '25cde44',    'pos' => 1,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/25cde44_font-awesome_2.css',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_25cde44_2' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '25cde44',    'pos' => 2,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/25cde44_styles_3.css',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_25cde44_3' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '25cde44',    'pos' => 3,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/25cde44_material-icons_4.css',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_25cde44_4' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '25cde44',    'pos' => 4,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/25cde44_flaticon_5.css',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_25cde44_5' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '25cde44',    'pos' => 5,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/25cde44_style_002_6.css',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_25cde44_6' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '25cde44',    'pos' => 6,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/25cde44_css_7.css',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_25cde44_7' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '25cde44',    'pos' => 7,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/25cde44_elementor-icons_8.css',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_25cde44_8' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '25cde44',    'pos' => 8,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/25cde44_animations_9.css',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_25cde44_9' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '25cde44',    'pos' => 9,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/25cde44_frontend_10.css',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_25cde44_10' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '25cde44',    'pos' => 10,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/25cde44_post-4059_11.css',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_25cde44_11' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '25cde44',    'pos' => 11,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/25cde44_typography_12.css',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_25cde44_12' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '25cde44',    'pos' => 12,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/25cde44_style_13.css',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_9daec9b' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '9daec9b',    'pos' => NULL,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/9daec9b.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_9daec9b_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '9daec9b',    'pos' => 0,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/9daec9b_jquery-3.2.1.min_1.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_9daec9b_1' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '9daec9b',    'pos' => 1,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/9daec9b_main_2.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fuel_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\Fuel\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (    0 =>     array (      0 => 'text',      1 => 'www.fuelbank.io',    ),  ),  5 =>   array (  ),),
        'exchange_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\Exchange\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (    0 =>     array (      0 => 'text',      1 => 'exchange.fuelbank.io',    ),  ),  5 =>   array (  ),),
        'admin_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\Admin\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (    0 =>     array (      0 => 'text',      1 => 'www.admin.fuelbank.io',    ),  ),  5 =>   array (  ),),
        'easyadmin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\AdminController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/dashboard/',    ),  ),  4 =>   array (    0 =>     array (      0 => 'text',      1 => 'www.admin.fuelbank.io',    ),  ),  5 =>   array (  ),),
        'admin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\AdminController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/dashboard/',    ),  ),  4 =>   array (    0 =>     array (      0 => 'text',      1 => 'www.admin.fuelbank.io',    ),  ),  5 =>   array (  ),),
        'fos_user_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (    0 =>     array (      0 => 'text',      1 => 'www.admin.fuelbank.io',    ),  ),  5 =>   array (  ),),
        'fos_user_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (    0 =>     array (      0 => 'text',      1 => 'www.admin.fuelbank.io',    ),  ),  5 =>   array (  ),),
        'fos_user_security_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (    0 =>     array (      0 => 'text',      1 => 'www.admin.fuelbank.io',    ),  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
