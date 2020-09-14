<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'admin' => array(array(), array('_controller' => 'App\\Controller\\AdminController::admin'), array(), array(array('text', '/admin')), array(), array()),
        'delete_user' => array(array('id'), array('_controller' => 'App\\Controller\\AdminController::deleteUser'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/delete')), array(), array()),
        'dashboard' => array(array(), array('_controller' => 'App\\Controller\\DashboardController::dashboard'), array(), array(array('text', '/dashboard')), array(), array()),
        'home' => array(array(), array('_controller' => 'App\\Controller\\IndexController::index'), array(), array(array('text', '/')), array(), array()),
        'add' => array(array(), array('_controller' => 'App\\Controller\\IndexController::add'), array(), array(array('text', '/car/add')), array(), array()),
        'edit' => array(array('id'), array('_controller' => 'App\\Controller\\IndexController::edit'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/car/edit')), array(), array()),
        'delete' => array(array('id'), array('_controller' => 'App\\Controller\\IndexController::delete'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/car/delete')), array(), array()),
        'show' => array(array('id'), array('_controller' => 'App\\Controller\\IndexController::show'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/show')), array(), array()),
        'contact' => array(array(), array('_controller' => 'App\\Controller\\IndexController::contact'), array(), array(array('text', '/contact')), array(), array()),
        'delete_keyword' => array(array('id'), array('_controller' => 'App\\Controller\\IndexController::deleteKeyword'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/delete/keyword')), array(), array()),
        'search_car' => array(array(), array('_controller' => 'App\\Controller\\SearchController::searchCar'), array(), array(array('text', '/search/car')), array(), array()),
        'app_login' => array(array(), array('_controller' => 'App\\Controller\\SecurityController::login'), array(), array(array('text', '/login')), array(), array()),
        'registration' => array(array(), array('_controller' => 'App\\Controller\\SecurityController::registration'), array(), array(array('text', '/registration')), array(), array()),
        'token_validation' => array(array('value'), array('_controller' => 'App\\Controller\\SecurityController::validateToken'), array(), array(array('variable', '/', '[^/]++', 'value'), array('text', '/confirmation')), array(), array()),
        '_twig_error_test' => array(array('code', '_format'), array('_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code' => '\\d+'), array(array('variable', '.', '[^/]++', '_format'), array('variable', '/', '\\d+', 'code'), array('text', '/_error')), array(), array()),
        '_wdt' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::toolbarAction'), array(), array(array('variable', '/', '[^/]++', 'token'), array('text', '/_wdt')), array(), array()),
        '_profiler_home' => array(array(), array('_controller' => 'web_profiler.controller.profiler::homeAction'), array(), array(array('text', '/_profiler/')), array(), array()),
        '_profiler_search' => array(array(), array('_controller' => 'web_profiler.controller.profiler::searchAction'), array(), array(array('text', '/_profiler/search')), array(), array()),
        '_profiler_search_bar' => array(array(), array('_controller' => 'web_profiler.controller.profiler::searchBarAction'), array(), array(array('text', '/_profiler/search_bar')), array(), array()),
        '_profiler_phpinfo' => array(array(), array('_controller' => 'web_profiler.controller.profiler::phpinfoAction'), array(), array(array('text', '/_profiler/phpinfo')), array(), array()),
        '_profiler_search_results' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array(), array(array('text', '/search/results'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_open_file' => array(array(), array('_controller' => 'web_profiler.controller.profiler::openAction'), array(), array(array('text', '/_profiler/open')), array(), array()),
        '_profiler' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::panelAction'), array(), array(array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_router' => array(array('token'), array('_controller' => 'web_profiler.controller.router::panelAction'), array(), array(array('text', '/router'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_exception' => array(array('token'), array('_controller' => 'web_profiler.controller.exception::showAction'), array(), array(array('text', '/exception'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_exception_css' => array(array('token'), array('_controller' => 'web_profiler.controller.exception::cssAction'), array(), array(array('text', '/exception.css'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        'logout' => array(array(), array(), array(), array(array('text', '/logout')), array(), array()),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && (self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
            unset($parameters['_locale']);
            $name .= '.'.$locale;
        } elseif (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
