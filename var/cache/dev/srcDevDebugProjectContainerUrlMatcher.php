<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = $allowSchemes = array();
        if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
            return $ret;
        }
        if ($allow) {
            throw new MethodNotAllowedException(array_keys($allow));
        }
        if (!in_array($this->context->getMethod(), array('HEAD', 'GET'), true)) {
            // no-op
        } elseif ($allowSchemes) {
            redirect_scheme:
            $scheme = $this->context->getScheme();
            $this->context->setScheme(key($allowSchemes));
            try {
                if ($ret = $this->doMatch($pathinfo)) {
                    return $this->redirect($pathinfo, $ret['_route'], $this->context->getScheme()) + $ret;
                }
            } finally {
                $this->context->setScheme($scheme);
            }
        } elseif ('/' !== $pathinfo) {
            $pathinfo = '/' !== $pathinfo[-1] ? $pathinfo.'/' : substr($pathinfo, 0, -1);
            if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
                return $this->redirect($pathinfo, $ret['_route']) + $ret;
            }
            if ($allowSchemes) {
                goto redirect_scheme;
            }
        }

        throw new ResourceNotFoundException();
    }

    private function doMatch(string $rawPathinfo, array &$allow = array(), array &$allowSchemes = array()): ?array
    {
        $allow = $allowSchemes = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $context = $this->context;
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        switch ($pathinfo) {
            default:
                $routes = array(
                    '/admin' => array(array('_route' => 'admin', '_controller' => 'App\\Controller\\AdminController::admin'), null, null, null),
                    '/dashboard' => array(array('_route' => 'dashboard', '_controller' => 'App\\Controller\\DashboardController::dashboard'), null, null, null),
                    '/' => array(array('_route' => 'home', '_controller' => 'App\\Controller\\IndexController::index'), null, null, null),
                    '/car/add' => array(array('_route' => 'add', '_controller' => 'App\\Controller\\IndexController::add'), null, null, null),
                    '/contact' => array(array('_route' => 'contact', '_controller' => 'App\\Controller\\IndexController::contact'), null, null, null),
                    '/search/car' => array(array('_route' => 'search_car', '_controller' => 'App\\Controller\\SearchController::searchCar'), null, null, null),
                    '/login' => array(array('_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'), null, null, null),
                    '/registration' => array(array('_route' => 'registration', '_controller' => 'App\\Controller\\SecurityController::registration'), null, null, null),
                    '/_profiler/' => array(array('_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'), null, null, null),
                    '/_profiler/search' => array(array('_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'), null, null, null),
                    '/_profiler/search_bar' => array(array('_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'), null, null, null),
                    '/_profiler/phpinfo' => array(array('_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'), null, null, null),
                    '/_profiler/open' => array(array('_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'), null, null, null),
                    '/logout' => array(array('_route' => 'logout'), null, null, null),
                );

                if (!isset($routes[$pathinfo])) {
                    break;
                }
                list($ret, $requiredHost, $requiredMethods, $requiredSchemes) = $routes[$pathinfo];

                $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                    if ($hasRequiredScheme) {
                        $allow += $requiredMethods;
                    }
                    break;
                }
                if (!$hasRequiredScheme) {
                    $allowSchemes += $requiredSchemes;
                    break;
                }

                return $ret;
        }

        $matchedPathinfo = $pathinfo;
        $regexList = array(
            0 => '{^(?'
                    .'|/admin/delete/([^/]++)(*:29)'
                    .'|/c(?'
                        .'|ar/(?'
                            .'|edit/([^/]++)(*:60)'
                            .'|delete/([^/]++)(*:82)'
                        .')'
                        .'|onfirmation/([^/]++)(*:110)'
                    .')'
                    .'|/show/([^/]++)(*:133)'
                    .'|/delete/keyword/([^/]++)(*:165)'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:204)'
                        .'|wdt/([^/]++)(*:224)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:270)'
                                .'|router(*:284)'
                                .'|exception(?'
                                    .'|(*:304)'
                                    .'|\\.css(*:317)'
                                .')'
                            .')'
                            .'|(*:327)'
                        .')'
                    .')'
                .')$}sD',
        );

        foreach ($regexList as $offset => $regex) {
            while (preg_match($regex, $matchedPathinfo, $matches)) {
                switch ($m = (int) $matches['MARK']) {
                    case 165:
                        $matches = array('id' => $matches[1] ?? null);

                        // delete_keyword
                        if (($request = $request ?? $this->request ?: $this->createRequest($pathinfo)) && preg_match("/XMLHttpRequest/i", $request->headers->get("X-Requested-With"))) {
                            $ret = $this->mergeDefaults(array('_route' => 'delete_keyword') + $matches, array('_controller' => 'App\\Controller\\IndexController::deleteKeyword'));
                            if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                                $allow += $a;
                                goto not_delete_keyword;
                            }

                            return $ret;
                        }
                        not_delete_keyword:

                        break;
                    default:
                        $routes = array(
                            29 => array(array('_route' => 'delete_user', '_controller' => 'App\\Controller\\AdminController::deleteUser'), array('id'), null, null),
                            60 => array(array('_route' => 'edit', '_controller' => 'App\\Controller\\IndexController::edit'), array('id'), null, null),
                            82 => array(array('_route' => 'delete', '_controller' => 'App\\Controller\\IndexController::delete'), array('id'), null, null),
                            110 => array(array('_route' => 'token_validation', '_controller' => 'App\\Controller\\SecurityController::validateToken'), array('value'), null, null),
                            133 => array(array('_route' => 'show', '_controller' => 'App\\Controller\\IndexController::show'), array('id'), null, null),
                            204 => array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null),
                            224 => array(array('_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'), array('token'), null, null),
                            270 => array(array('_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array('token'), null, null),
                            284 => array(array('_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'), array('token'), null, null),
                            304 => array(array('_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'), array('token'), null, null),
                            317 => array(array('_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'), array('token'), null, null),
                            327 => array(array('_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'), array('token'), null, null),
                        );

                        list($ret, $vars, $requiredMethods, $requiredSchemes) = $routes[$m];

                        foreach ($vars as $i => $v) {
                            if (isset($matches[1 + $i])) {
                                $ret[$v] = $matches[1 + $i];
                            }
                        }

                        $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                        if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                            if ($hasRequiredScheme) {
                                $allow += $requiredMethods;
                            }
                            break;
                        }
                        if (!$hasRequiredScheme) {
                            $allowSchemes += $requiredSchemes;
                            break;
                        }

                        return $ret;
                }

                if (327 === $m) {
                    break;
                }
                $regex = substr_replace($regex, 'F', $m - $offset, 1 + strlen($m));
                $offset += strlen($m);
            }
        }
        if ('/' === $pathinfo && !$allow && !$allowSchemes) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        return null;
    }
}
