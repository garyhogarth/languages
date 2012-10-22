<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // _demo_login
        if ($pathinfo === '/demo/secured/login') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
        }

        // _security_check
        if ($pathinfo === '/demo/secured/login_check') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
        }

        // _demo_logout
        if ($pathinfo === '/demo/secured/logout') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
        }

        // acme_demo_secured_hello
        if ($pathinfo === '/demo/secured/hello') {
            return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
        }

        // _demo_secured_hello
        if (0 === strpos($pathinfo, '/demo/secured/hello') && preg_match('#^/demo/secured/hello/(?<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',)), array('_route' => '_demo_secured_hello'));
        }

        // _demo_secured_hello_admin
        if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',)), array('_route' => '_demo_secured_hello_admin'));
        }

        // _demo
        if (rtrim($pathinfo, '/') === '/demo') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_demo');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
        }

        // _demo_hello
        if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',)), array('_route' => '_demo_hello'));
        }

        // _demo_contact
        if ($pathinfo === '/demo/contact') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
        }

        // _wdt
        if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?<token>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_info
            if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?<about>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::infoAction',)), array('_route' => '_profiler_info'));
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?<token>[^/\\.]+)\\.txt$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_phpinfo
            if ($pathinfo === '/_profiler/phpinfo') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::phpinfoAction',  '_route' => '_profiler_phpinfo',);
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?<token>[^/]+)/search/results$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?<token>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

            // _profiler_redirect
            if (rtrim($pathinfo, '/') === '/_profiler') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_profiler_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => '_profiler_search_results',  'token' => 'empty',  'ip' => '',  'url' => '',  'method' => '',  'limit' => '10',  '_route' => '_profiler_redirect',);
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
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?<index>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        if (0 === strpos($pathinfo, '/admin/verb')) {
            // admin_verb
            if (rtrim($pathinfo, '/') === '/admin/verb') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_verb');
                }

                return array (  '_controller' => 'Aoceu\\VerbBundle\\Controller\\VerbController::indexAction',  '_route' => 'admin_verb',);
            }

            // admin_verb_show
            if (preg_match('#^/admin/verb/(?<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Aoceu\\VerbBundle\\Controller\\VerbController::showAction',)), array('_route' => 'admin_verb_show'));
            }

            // admin_verb_new
            if ($pathinfo === '/admin/verb/new') {
                return array (  '_controller' => 'Aoceu\\VerbBundle\\Controller\\VerbController::newAction',  '_route' => 'admin_verb_new',);
            }

            // admin_verb_create
            if ($pathinfo === '/admin/verb/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_verb_create;
                }

                return array (  '_controller' => 'Aoceu\\VerbBundle\\Controller\\VerbController::createAction',  '_route' => 'admin_verb_create',);
            }
            not_admin_verb_create:

            // admin_verb_edit
            if (preg_match('#^/admin/verb/(?<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Aoceu\\VerbBundle\\Controller\\VerbController::editAction',)), array('_route' => 'admin_verb_edit'));
            }

            // admin_verb_update
            if (preg_match('#^/admin/verb/(?<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_verb_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Aoceu\\VerbBundle\\Controller\\VerbController::updateAction',)), array('_route' => 'admin_verb_update'));
            }
            not_admin_verb_update:

            // admin_verb_delete
            if (preg_match('#^/admin/verb/(?<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_verb_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Aoceu\\VerbBundle\\Controller\\VerbController::deleteAction',)), array('_route' => 'admin_verb_delete'));
            }
            not_admin_verb_delete:

        }

        if (0 === strpos($pathinfo, '/admin/tense')) {
            // admin_tense
            if (rtrim($pathinfo, '/') === '/admin/tense') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_tense');
                }

                return array (  '_controller' => 'Aoceu\\VerbBundle\\Controller\\TenseController::indexAction',  '_route' => 'admin_tense',);
            }

            // admin_tense_show
            if (preg_match('#^/admin/tense/(?<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Aoceu\\VerbBundle\\Controller\\TenseController::showAction',)), array('_route' => 'admin_tense_show'));
            }

            // admin_tense_new
            if ($pathinfo === '/admin/tense/new') {
                return array (  '_controller' => 'Aoceu\\VerbBundle\\Controller\\TenseController::newAction',  '_route' => 'admin_tense_new',);
            }

            // admin_tense_create
            if ($pathinfo === '/admin/tense/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_tense_create;
                }

                return array (  '_controller' => 'Aoceu\\VerbBundle\\Controller\\TenseController::createAction',  '_route' => 'admin_tense_create',);
            }
            not_admin_tense_create:

            // admin_tense_edit
            if (preg_match('#^/admin/tense/(?<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Aoceu\\VerbBundle\\Controller\\TenseController::editAction',)), array('_route' => 'admin_tense_edit'));
            }

            // admin_tense_update
            if (preg_match('#^/admin/tense/(?<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_tense_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Aoceu\\VerbBundle\\Controller\\TenseController::updateAction',)), array('_route' => 'admin_tense_update'));
            }
            not_admin_tense_update:

            // admin_tense_delete
            if (preg_match('#^/admin/tense/(?<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_tense_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Aoceu\\VerbBundle\\Controller\\TenseController::deleteAction',)), array('_route' => 'admin_tense_delete'));
            }
            not_admin_tense_delete:

        }

        if (0 === strpos($pathinfo, '/admin/person')) {
            // admin_person
            if (rtrim($pathinfo, '/') === '/admin/person') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_person');
                }

                return array (  '_controller' => 'Aoceu\\VerbBundle\\Controller\\PersonController::indexAction',  '_route' => 'admin_person',);
            }

            // admin_person_show
            if (preg_match('#^/admin/person/(?<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Aoceu\\VerbBundle\\Controller\\PersonController::showAction',)), array('_route' => 'admin_person_show'));
            }

            // admin_person_new
            if ($pathinfo === '/admin/person/new') {
                return array (  '_controller' => 'Aoceu\\VerbBundle\\Controller\\PersonController::newAction',  '_route' => 'admin_person_new',);
            }

            // admin_person_create
            if ($pathinfo === '/admin/person/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_person_create;
                }

                return array (  '_controller' => 'Aoceu\\VerbBundle\\Controller\\PersonController::createAction',  '_route' => 'admin_person_create',);
            }
            not_admin_person_create:

            // admin_person_edit
            if (preg_match('#^/admin/person/(?<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Aoceu\\VerbBundle\\Controller\\PersonController::editAction',)), array('_route' => 'admin_person_edit'));
            }

            // admin_person_update
            if (preg_match('#^/admin/person/(?<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_person_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Aoceu\\VerbBundle\\Controller\\PersonController::updateAction',)), array('_route' => 'admin_person_update'));
            }
            not_admin_person_update:

            // admin_person_delete
            if (preg_match('#^/admin/person/(?<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_person_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Aoceu\\VerbBundle\\Controller\\PersonController::deleteAction',)), array('_route' => 'admin_person_delete'));
            }
            not_admin_person_delete:

        }

        if (0 === strpos($pathinfo, '/admin/conjugation')) {
            // admin_conjugation
            if (rtrim($pathinfo, '/') === '/admin/conjugation') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_conjugation');
                }

                return array (  '_controller' => 'Aoceu\\VerbBundle\\Controller\\ConjugationController::indexAction',  '_route' => 'admin_conjugation',);
            }

            // admin_conjugation_show
            if (preg_match('#^/admin/conjugation/(?<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Aoceu\\VerbBundle\\Controller\\ConjugationController::showAction',)), array('_route' => 'admin_conjugation_show'));
            }

            // admin_conjugation_new
            if ($pathinfo === '/admin/conjugation/new') {
                return array (  '_controller' => 'Aoceu\\VerbBundle\\Controller\\ConjugationController::newAction',  '_route' => 'admin_conjugation_new',);
            }

            // admin_conjugation_create
            if ($pathinfo === '/admin/conjugation/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_conjugation_create;
                }

                return array (  '_controller' => 'Aoceu\\VerbBundle\\Controller\\ConjugationController::createAction',  '_route' => 'admin_conjugation_create',);
            }
            not_admin_conjugation_create:

            // admin_conjugation_edit
            if (preg_match('#^/admin/conjugation/(?<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Aoceu\\VerbBundle\\Controller\\ConjugationController::editAction',)), array('_route' => 'admin_conjugation_edit'));
            }

            // admin_conjugation_update
            if (preg_match('#^/admin/conjugation/(?<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_conjugation_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Aoceu\\VerbBundle\\Controller\\ConjugationController::updateAction',)), array('_route' => 'admin_conjugation_update'));
            }
            not_admin_conjugation_update:

            // admin_conjugation_delete
            if (preg_match('#^/admin/conjugation/(?<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_conjugation_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Aoceu\\VerbBundle\\Controller\\ConjugationController::deleteAction',)), array('_route' => 'admin_conjugation_delete'));
            }
            not_admin_conjugation_delete:

        }

        // aoceu_tools_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Aoceu\\ToolsBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'aoceu_tools_homepage'));
        }

        // aoceu_user_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Aoceu\\UserBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'aoceu_user_homepage'));
        }

        // aoceu_site_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'aoceu_site_homepage');
            }

            return array (  '_controller' => 'Aoceu\\SiteBundle\\Controller\\PageController::homeAction',  '_route' => 'aoceu_site_homepage',);
        }

        // aoceu_site_about
        if ($pathinfo === '/about') {
            return array (  '_controller' => 'Aoceu\\SiteBundle\\Controller\\PageController::aboutAction',  '_route' => 'aoceu_site_about',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
