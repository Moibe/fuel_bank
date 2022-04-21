<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/css')) {
            // _assetic_9eb932a
            if ('/css/9eb932a.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '9eb932a',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_9eb932a',);
            }

            // _assetic_9eb932a_0
            if ('/css/9eb932a_bootstrap.min_1.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '9eb932a',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_9eb932a_0',);
            }

            // _assetic_25cde44
            if ('/css/25cde44.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '25cde44',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_25cde44',);
            }

            if (0 === strpos($pathinfo, '/css/25cde44_')) {
                if (0 === strpos($pathinfo, '/css/25cde44_style_')) {
                    // _assetic_25cde44_0
                    if ('/css/25cde44_style_003_1.css' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '25cde44',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_25cde44_0',);
                    }

                    // _assetic_25cde44_5
                    if ('/css/25cde44_style_002_6.css' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '25cde44',  'pos' => 5,  '_format' => 'css',  '_route' => '_assetic_25cde44_5',);
                    }

                    // _assetic_25cde44_12
                    if ('/css/25cde44_style_13.css' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '25cde44',  'pos' => 12,  '_format' => 'css',  '_route' => '_assetic_25cde44_12',);
                    }

                }

                // _assetic_25cde44_2
                if ('/css/25cde44_styles_3.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '25cde44',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_25cde44_2',);
                }

                if (0 === strpos($pathinfo, '/css/25cde44_f')) {
                    // _assetic_25cde44_1
                    if ('/css/25cde44_font-awesome_2.css' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '25cde44',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_25cde44_1',);
                    }

                    // _assetic_25cde44_4
                    if ('/css/25cde44_flaticon_5.css' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '25cde44',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_25cde44_4',);
                    }

                    // _assetic_25cde44_9
                    if ('/css/25cde44_frontend_10.css' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '25cde44',  'pos' => 9,  '_format' => 'css',  '_route' => '_assetic_25cde44_9',);
                    }

                }

                // _assetic_25cde44_3
                if ('/css/25cde44_material-icons_4.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '25cde44',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_25cde44_3',);
                }

                // _assetic_25cde44_6
                if ('/css/25cde44_css_7.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '25cde44',  'pos' => 6,  '_format' => 'css',  '_route' => '_assetic_25cde44_6',);
                }

                // _assetic_25cde44_7
                if ('/css/25cde44_elementor-icons_8.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '25cde44',  'pos' => 7,  '_format' => 'css',  '_route' => '_assetic_25cde44_7',);
                }

                // _assetic_25cde44_8
                if ('/css/25cde44_animations_9.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '25cde44',  'pos' => 8,  '_format' => 'css',  '_route' => '_assetic_25cde44_8',);
                }

                // _assetic_25cde44_10
                if ('/css/25cde44_post-4059_11.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '25cde44',  'pos' => 10,  '_format' => 'css',  '_route' => '_assetic_25cde44_10',);
                }

                // _assetic_25cde44_11
                if ('/css/25cde44_typography_12.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '25cde44',  'pos' => 11,  '_format' => 'css',  '_route' => '_assetic_25cde44_11',);
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/images')) {
            // _assetic_b0d69ed
            if ('/images/b0d69ed.png' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'b0d69ed',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_b0d69ed',);
            }

            // _assetic_b0d69ed_0
            if ('/images/b0d69ed_logo-xs_1.png' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'b0d69ed',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_b0d69ed_0',);
            }

            // _assetic_d07b8bb
            if ('/images/d07b8bb.png' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'd07b8bb',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_d07b8bb',);
            }

            // _assetic_d07b8bb_0
            if ('/images/d07b8bb_logo_1.png' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'd07b8bb',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_d07b8bb_0',);
            }

        }

        elseif (0 === strpos($pathinfo, '/js/9daec9b')) {
            // _assetic_9daec9b
            if ('/js/9daec9b.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '9daec9b',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_9daec9b',);
            }

            // _assetic_9daec9b_0
            if ('/js/9daec9b_jquery-3.2.1.min_1.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '9daec9b',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_9daec9b_0',);
            }

            // _assetic_9daec9b_1
            if ('/js/9daec9b_main_2.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '9daec9b',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_9daec9b_1',);
            }

        }

        elseif (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        $host = $context->getHost();

        if (preg_match('#^www\\.fuelbank\\.io$#si', $host, $hostMatches)) {
            // fuel_homepage
            if ('' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fuel_homepage');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\Fuel\\DefaultController::indexAction',  '_route' => 'fuel_homepage',);
            }

        }

        if (preg_match('#^exchange\\.fuelbank\\.io$#si', $host, $hostMatches)) {
            // exchange_homepage
            if ('' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'exchange_homepage');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\Exchange\\DefaultController::indexAction',  '_route' => 'exchange_homepage',);
            }

        }

        if (preg_match('#^admin\\.fuelbank\\.io$#si', $host, $hostMatches)) {
            // admin_homepage
            if ('' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_homepage');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\Admin\\DefaultController::indexAction',  '_route' => 'admin_homepage',);
            }

            if (0 === strpos($pathinfo, '/dashboard')) {
                // easyadmin
                if ('/dashboard' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'easyadmin');
                    }

                    return array (  '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\AdminController::indexAction',  '_route' => 'easyadmin',);
                }

                // admin
                if ('/dashboard' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin');
                    }

                    return array (  '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\AdminController::indexAction',  '_route' => 'admin',);
                }

            }

            elseif (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ('/login' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ('/login_check' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ('/logout' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
