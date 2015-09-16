<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
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

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/hello')) {
            // chernovda_timemanager_default_index
            if (preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'chernovda_timemanager_default_index')), array (  '_controller' => 'ChernovDA\\TimeManagerBundle\\Controller\\DefaultController::indexAction',));
            }

            // chernovda_webinars_default_index
            if (preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'chernovda_webinars_default_index')), array (  '_controller' => 'ChernovDA\\WebinarsBundle\\Controller\\DefaultController::indexAction',));
            }

        }

        // chernovda_webinars_webinar_webinar
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'chernovda_webinars_webinar_webinar');
            }

            return array (  '_controller' => 'ChernovDA\\WebinarsBundle\\Controller\\WebinarController::webinarAction',  '_route' => 'chernovda_webinars_webinar_webinar',);
        }

        // chernovda_webinars_webinar_newwebinar
        if (0 === strpos($pathinfo, '/new/webinar') && preg_match('#^/new/webinar/(?P<title>[^/]++)/(?P<date_beg>[^/]++)/(?P<time_beg>[^/]++)/(?P<reg_status>[^/]++)/(?P<description>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'chernovda_webinars_webinar_newwebinar')), array (  '_controller' => 'ChernovDA\\WebinarsBundle\\Controller\\WebinarController::newWebinarAction',));
        }

        if (0 === strpos($pathinfo, '/update')) {
            // chernovda_webinars_webinar_updatewebinar
            if (0 === strpos($pathinfo, '/update/webinar') && preg_match('#^/update/webinar/(?P<id>[^/]++)/(?P<title>[^/]++)/(?P<date_beg>[^/]++)/(?P<time_beg>[^/]++)/(?P<reg_status>[^/]++)/(?P<description>[^/]++)/(?P<pic>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'chernovda_webinars_webinar_updatewebinar')), array (  '_controller' => 'ChernovDA\\WebinarsBundle\\Controller\\WebinarController::updateWebinarAction',));
            }

            // chernovda_webinars_webinar_updatespeakers
            if (0 === strpos($pathinfo, '/update/speakers') && preg_match('#^/update/speakers/(?P<id>[^/]++)/(?P<avatar>[^/]++)/(?P<fio>[^/]++)/(?P<organisation>[^/]++)/(?P<position>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'chernovda_webinars_webinar_updatespeakers')), array (  '_controller' => 'ChernovDA\\WebinarsBundle\\Controller\\WebinarController::updateSpeakersAction',));
            }

            // chernovda_webinars_webinar_updateusers
            if (0 === strpos($pathinfo, '/update/users') && preg_match('#^/update/users/(?P<id>[^/]++)/(?P<avatar>[^/]++)/(?P<fio>[^/]++)/(?P<organisation>[^/]++)/(?P<position>[^/]++)/(?P<email>[^/]++)/(?P<password>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'chernovda_webinars_webinar_updateusers')), array (  '_controller' => 'ChernovDA\\WebinarsBundle\\Controller\\WebinarController::updateUsersAction',));
            }

        }

        // chernovda_webinars_webinar_newreguser
        if (0 === strpos($pathinfo, '/new/reguser') && preg_match('#^/new/reguser/(?P<email>[^/]++)/(?P<password>[^/]++)/(?P<avatar>[^/]++)/(?P<fio>[^/]++)/(?P<organisation>[^/]++)/(?P<position>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'chernovda_webinars_webinar_newreguser')), array (  '_controller' => 'ChernovDA\\WebinarsBundle\\Controller\\WebinarController::newReguserAction',));
        }

        if (0 === strpos($pathinfo, '/.')) {
            // chernovda_webinars_webinar_admin
            if ($pathinfo === '/.admin') {
                return array (  '_controller' => 'ChernovDA\\WebinarsBundle\\Controller\\WebinarController::adminAction',  '_route' => 'chernovda_webinars_webinar_admin',);
            }

            // chernovda_webinars_webinar_editor
            if ($pathinfo === '/.editor') {
                return array (  '_controller' => 'ChernovDA\\WebinarsBundle\\Controller\\WebinarController::editorAction',  '_route' => 'chernovda_webinars_webinar_editor',);
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
