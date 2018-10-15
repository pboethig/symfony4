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
            case '/admin/':
                // easyadmin
                return array('_route' => 'easyadmin', '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\AdminController::indexAction');
                // admin
                return array('_route' => 'admin', '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\AdminController::indexAction');
                break;
            default:
                $routes = array(
                    '/_profiler/' => array(array('_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'), null, null, null),
                    '/_profiler/search' => array(array('_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'), null, null, null),
                    '/_profiler/search_bar' => array(array('_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'), null, null, null),
                    '/_profiler/phpinfo' => array(array('_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'), null, null, null),
                    '/_profiler/open' => array(array('_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'), null, null, null),
                    '/api/movies' => array(array('_route' => 'get_movies', '_controller' => 'App\\Controller\\ApiMovieController::index'), null, array('GET' => 0), null),
                    '/default' => array(array('_route' => 'default', '_controller' => 'App\\Controller\\DefaultController::index'), null, null, null),
                    '/enquiry' => array(array('_route' => 'enquiry', '_controller' => 'App\\Controller\\MovieController::newEnquiry'), null, null, null),
                    '/movies' => array(array('_route' => 'index', '_controller' => 'App\\Controller\\MovieController::index'), null, null, null),
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
                    .'|/api(?'
                        .'|plat(?'
                            .'|(?:/(index)(?:\\.([^/]++))?)?(*:49)'
                            .'|/(?'
                                .'|docs(?:\\.([^/]++))?(*:79)'
                                .'|contexts/(.+)(?:\\.([^/]++))?(*:114)'
                                .'|actors(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:149)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:187)'
                                    .')'
                                .')'
                                .'|movies(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:224)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:262)'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|/movies/([^/]++)(?'
                            .'|(*:293)'
                            .'|/sale(*:306)'
                        .')'
                    .')'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:347)'
                        .'|wdt/([^/]++)(*:367)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:413)'
                                .'|router(*:427)'
                                .'|exception(?'
                                    .'|(*:447)'
                                    .'|\\.css(*:460)'
                                .')'
                            .')'
                            .'|(*:470)'
                        .')'
                    .')'
                    .'|/movie/([^/]++)(?'
                        .'|/book(*:503)'
                        .'|(*:511)'
                    .')'
                .')$}sD',
        );

        foreach ($regexList as $offset => $regex) {
            while (preg_match($regex, $matchedPathinfo, $matches)) {
                switch ($m = (int) $matches['MARK']) {
                    case 149:
                        $matches = array('_format' => $matches[1] ?? null);

                        // api_actors_get_collection
                        $ret = $this->mergeDefaults(array('_route' => 'api_actors_get_collection') + $matches, array('_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Actor', '_api_collection_operation_name' => 'get'));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_api_actors_get_collection;
                        }

                        return $ret;
                        not_api_actors_get_collection:

                        // api_actors_post_collection
                        $ret = $this->mergeDefaults(array('_route' => 'api_actors_post_collection') + $matches, array('_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Actor', '_api_collection_operation_name' => 'post'));
                        if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_api_actors_post_collection;
                        }

                        return $ret;
                        not_api_actors_post_collection:

                        break;
                    case 187:
                        $matches = array('id' => $matches[1] ?? null, '_format' => $matches[2] ?? null);

                        // api_actors_get_item
                        $ret = $this->mergeDefaults(array('_route' => 'api_actors_get_item') + $matches, array('_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Actor', '_api_item_operation_name' => 'get'));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_api_actors_get_item;
                        }

                        return $ret;
                        not_api_actors_get_item:

                        // api_actors_delete_item
                        $ret = $this->mergeDefaults(array('_route' => 'api_actors_delete_item') + $matches, array('_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Actor', '_api_item_operation_name' => 'delete'));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_api_actors_delete_item;
                        }

                        return $ret;
                        not_api_actors_delete_item:

                        // api_actors_put_item
                        $ret = $this->mergeDefaults(array('_route' => 'api_actors_put_item') + $matches, array('_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Actor', '_api_item_operation_name' => 'put'));
                        if (!isset(($a = array('PUT' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_api_actors_put_item;
                        }

                        return $ret;
                        not_api_actors_put_item:

                        break;
                    case 224:
                        $matches = array('_format' => $matches[1] ?? null);

                        // api_movies_get_collection
                        $ret = $this->mergeDefaults(array('_route' => 'api_movies_get_collection') + $matches, array('_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Movie', '_api_collection_operation_name' => 'get'));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_api_movies_get_collection;
                        }

                        return $ret;
                        not_api_movies_get_collection:

                        // api_movies_post_collection
                        $ret = $this->mergeDefaults(array('_route' => 'api_movies_post_collection') + $matches, array('_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Movie', '_api_collection_operation_name' => 'post'));
                        if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_api_movies_post_collection;
                        }

                        return $ret;
                        not_api_movies_post_collection:

                        break;
                    case 262:
                        $matches = array('id' => $matches[1] ?? null, '_format' => $matches[2] ?? null);

                        // api_movies_get_item
                        $ret = $this->mergeDefaults(array('_route' => 'api_movies_get_item') + $matches, array('_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Movie', '_api_item_operation_name' => 'get'));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_api_movies_get_item;
                        }

                        return $ret;
                        not_api_movies_get_item:

                        // api_movies_delete_item
                        $ret = $this->mergeDefaults(array('_route' => 'api_movies_delete_item') + $matches, array('_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Movie', '_api_item_operation_name' => 'delete'));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_api_movies_delete_item;
                        }

                        return $ret;
                        not_api_movies_delete_item:

                        // api_movies_put_item
                        $ret = $this->mergeDefaults(array('_route' => 'api_movies_put_item') + $matches, array('_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Movie', '_api_item_operation_name' => 'put'));
                        if (!isset(($a = array('PUT' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_api_movies_put_item;
                        }

                        return $ret;
                        not_api_movies_put_item:

                        break;
                    default:
                        $routes = array(
                            49 => array(array('_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => '1', 'index' => 'index'), array('index', '_format'), null, null),
                            79 => array(array('_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_api_respond' => '1', '_format' => ''), array('_format'), null, null),
                            114 => array(array('_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_api_respond' => '1', '_format' => 'jsonld'), array('shortName', '_format'), null, null),
                            293 => array(array('_route' => 'get_movie', '_controller' => 'App\\Controller\\ApiMovieController::movie'), array('movieId'), array('GET' => 0), null),
                            306 => array(array('_route' => 'post_booking', '_controller' => 'App\\Controller\\ApiMovieController::newSale'), array('movieId'), array('POST' => 0), null),
                            347 => array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null),
                            367 => array(array('_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'), array('token'), null, null),
                            413 => array(array('_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array('token'), null, null),
                            427 => array(array('_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'), array('token'), null, null),
                            447 => array(array('_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'), array('token'), null, null),
                            460 => array(array('_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'), array('token'), null, null),
                            470 => array(array('_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'), array('token'), null, null),
                            503 => array(array('_route' => 'book', '_controller' => 'App\\Controller\\MovieController::newSale'), array('movieId'), null, null),
                            511 => array(array('_route' => 'movie', '_controller' => 'App\\Controller\\MovieController::movie'), array('movieId'), null, null),
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

                if (511 === $m) {
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
