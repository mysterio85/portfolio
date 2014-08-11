<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
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

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
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

        }

        // site_site_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'site_site_homepage')), array (  '_controller' => 'Site\\SiteBundle\\Controller\\DefaultController::indexAction',));
        }

        // WebsiteWebsiteBundle_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_WebsiteWebsiteBundle_homepage;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'WebsiteWebsiteBundle_homepage');
            }

            return array (  '_controller' => 'Website\\WebsiteBundle\\Controller\\PageController::indexAction',  '_route' => 'WebsiteWebsiteBundle_homepage',);
        }
        not_WebsiteWebsiteBundle_homepage:

        if (0 === strpos($pathinfo, '/co')) {
            // WebsiteWebsiteBundle_contact
            if ($pathinfo === '/contact') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_WebsiteWebsiteBundle_contact;
                }

                return array (  '_controller' => 'Website\\WebsiteBundle\\Controller\\PageController::contactAction',  '_route' => 'WebsiteWebsiteBundle_contact',);
            }
            not_WebsiteWebsiteBundle_contact:

            // WebsiteWebsiteBundle_competences
            if ($pathinfo === '/competences') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_WebsiteWebsiteBundle_competences;
                }

                return array (  '_controller' => 'Website\\WebsiteBundle\\Controller\\PageController::competencesAction',  '_route' => 'WebsiteWebsiteBundle_competences',);
            }
            not_WebsiteWebsiteBundle_competences:

        }

        // WebsiteWebsiteBundle_portfolio
        if ($pathinfo === '/portfolio') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_WebsiteWebsiteBundle_portfolio;
            }

            return array (  '_controller' => 'Website\\WebsiteBundle\\Controller\\PageController::portfolioAction',  '_route' => 'WebsiteWebsiteBundle_portfolio',);
        }
        not_WebsiteWebsiteBundle_portfolio:

        if (0 === strpos($pathinfo, '/login')) {
            // login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'Website\\WebsiteBundle\\Controller\\DefaultController::loginAction',  '_route' => 'login',);
            }

            // login_check
            if ($pathinfo === '/login_check') {
                return array('_route' => 'login_check');
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_redirect
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
            }

            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                // sonata_admin_retrieve_form_element
                if ($pathinfo === '/admin/core/get-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                }

                // sonata_admin_append_form_element
                if ($pathinfo === '/admin/core/append-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_short_object_information
                if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                }

                // sonata_admin_set_object_field_value
                if ($pathinfo === '/admin/core/set-object-field-value') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            // sonata_admin_search
            if ($pathinfo === '/admin/search') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
            }

            if (0 === strpos($pathinfo, '/admin/website/website')) {
                if (0 === strpos($pathinfo, '/admin/website/website/c')) {
                    if (0 === strpos($pathinfo, '/admin/website/website/categorie')) {
                        // admin_website_website_categorie_list
                        if ($pathinfo === '/admin/website/website/categorie/list') {
                            return array (  '_controller' => 'Website\\WebsiteBundle\\Controller\\CategorieAdminController::listAction',  '_sonata_admin' => 'website.website.admin.categorieadmin',  '_sonata_name' => 'admin_website_website_categorie_list',  '_route' => 'admin_website_website_categorie_list',);
                        }

                        // admin_website_website_categorie_create
                        if ($pathinfo === '/admin/website/website/categorie/create') {
                            return array (  '_controller' => 'Website\\WebsiteBundle\\Controller\\CategorieAdminController::createAction',  '_sonata_admin' => 'website.website.admin.categorieadmin',  '_sonata_name' => 'admin_website_website_categorie_create',  '_route' => 'admin_website_website_categorie_create',);
                        }

                        // admin_website_website_categorie_batch
                        if ($pathinfo === '/admin/website/website/categorie/batch') {
                            return array (  '_controller' => 'Website\\WebsiteBundle\\Controller\\CategorieAdminController::batchAction',  '_sonata_admin' => 'website.website.admin.categorieadmin',  '_sonata_name' => 'admin_website_website_categorie_batch',  '_route' => 'admin_website_website_categorie_batch',);
                        }

                        // admin_website_website_categorie_edit
                        if (preg_match('#^/admin/website/website/categorie/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_website_website_categorie_edit')), array (  '_controller' => 'Website\\WebsiteBundle\\Controller\\CategorieAdminController::editAction',  '_sonata_admin' => 'website.website.admin.categorieadmin',  '_sonata_name' => 'admin_website_website_categorie_edit',));
                        }

                        // admin_website_website_categorie_delete
                        if (preg_match('#^/admin/website/website/categorie/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_website_website_categorie_delete')), array (  '_controller' => 'Website\\WebsiteBundle\\Controller\\CategorieAdminController::deleteAction',  '_sonata_admin' => 'website.website.admin.categorieadmin',  '_sonata_name' => 'admin_website_website_categorie_delete',));
                        }

                        // admin_website_website_categorie_show
                        if (preg_match('#^/admin/website/website/categorie/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_website_website_categorie_show')), array (  '_controller' => 'Website\\WebsiteBundle\\Controller\\CategorieAdminController::showAction',  '_sonata_admin' => 'website.website.admin.categorieadmin',  '_sonata_name' => 'admin_website_website_categorie_show',));
                        }

                        // admin_website_website_categorie_export
                        if ($pathinfo === '/admin/website/website/categorie/export') {
                            return array (  '_controller' => 'Website\\WebsiteBundle\\Controller\\CategorieAdminController::exportAction',  '_sonata_admin' => 'website.website.admin.categorieadmin',  '_sonata_name' => 'admin_website_website_categorie_export',  '_route' => 'admin_website_website_categorie_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/website/website/competences')) {
                        // admin_website_website_competences_list
                        if ($pathinfo === '/admin/website/website/competences/list') {
                            return array (  '_controller' => 'Website\\WebsiteBundle\\Controller\\CompetencesAdminController::listAction',  '_sonata_admin' => 'website.website.admin.competencesadmin',  '_sonata_name' => 'admin_website_website_competences_list',  '_route' => 'admin_website_website_competences_list',);
                        }

                        // admin_website_website_competences_create
                        if ($pathinfo === '/admin/website/website/competences/create') {
                            return array (  '_controller' => 'Website\\WebsiteBundle\\Controller\\CompetencesAdminController::createAction',  '_sonata_admin' => 'website.website.admin.competencesadmin',  '_sonata_name' => 'admin_website_website_competences_create',  '_route' => 'admin_website_website_competences_create',);
                        }

                        // admin_website_website_competences_batch
                        if ($pathinfo === '/admin/website/website/competences/batch') {
                            return array (  '_controller' => 'Website\\WebsiteBundle\\Controller\\CompetencesAdminController::batchAction',  '_sonata_admin' => 'website.website.admin.competencesadmin',  '_sonata_name' => 'admin_website_website_competences_batch',  '_route' => 'admin_website_website_competences_batch',);
                        }

                        // admin_website_website_competences_edit
                        if (preg_match('#^/admin/website/website/competences/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_website_website_competences_edit')), array (  '_controller' => 'Website\\WebsiteBundle\\Controller\\CompetencesAdminController::editAction',  '_sonata_admin' => 'website.website.admin.competencesadmin',  '_sonata_name' => 'admin_website_website_competences_edit',));
                        }

                        // admin_website_website_competences_delete
                        if (preg_match('#^/admin/website/website/competences/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_website_website_competences_delete')), array (  '_controller' => 'Website\\WebsiteBundle\\Controller\\CompetencesAdminController::deleteAction',  '_sonata_admin' => 'website.website.admin.competencesadmin',  '_sonata_name' => 'admin_website_website_competences_delete',));
                        }

                        // admin_website_website_competences_show
                        if (preg_match('#^/admin/website/website/competences/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_website_website_competences_show')), array (  '_controller' => 'Website\\WebsiteBundle\\Controller\\CompetencesAdminController::showAction',  '_sonata_admin' => 'website.website.admin.competencesadmin',  '_sonata_name' => 'admin_website_website_competences_show',));
                        }

                        // admin_website_website_competences_export
                        if ($pathinfo === '/admin/website/website/competences/export') {
                            return array (  '_controller' => 'Website\\WebsiteBundle\\Controller\\CompetencesAdminController::exportAction',  '_sonata_admin' => 'website.website.admin.competencesadmin',  '_sonata_name' => 'admin_website_website_competences_export',  '_route' => 'admin_website_website_competences_export',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/website/website/module')) {
                    // admin_website_website_module_list
                    if ($pathinfo === '/admin/website/website/module/list') {
                        return array (  '_controller' => 'Website\\WebsiteBundle\\Controller\\ModuleAdminController::listAction',  '_sonata_admin' => 'website.website.admin.modueleadmin',  '_sonata_name' => 'admin_website_website_module_list',  '_route' => 'admin_website_website_module_list',);
                    }

                    // admin_website_website_module_create
                    if ($pathinfo === '/admin/website/website/module/create') {
                        return array (  '_controller' => 'Website\\WebsiteBundle\\Controller\\ModuleAdminController::createAction',  '_sonata_admin' => 'website.website.admin.modueleadmin',  '_sonata_name' => 'admin_website_website_module_create',  '_route' => 'admin_website_website_module_create',);
                    }

                    // admin_website_website_module_batch
                    if ($pathinfo === '/admin/website/website/module/batch') {
                        return array (  '_controller' => 'Website\\WebsiteBundle\\Controller\\ModuleAdminController::batchAction',  '_sonata_admin' => 'website.website.admin.modueleadmin',  '_sonata_name' => 'admin_website_website_module_batch',  '_route' => 'admin_website_website_module_batch',);
                    }

                    // admin_website_website_module_edit
                    if (preg_match('#^/admin/website/website/module/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_website_website_module_edit')), array (  '_controller' => 'Website\\WebsiteBundle\\Controller\\ModuleAdminController::editAction',  '_sonata_admin' => 'website.website.admin.modueleadmin',  '_sonata_name' => 'admin_website_website_module_edit',));
                    }

                    // admin_website_website_module_delete
                    if (preg_match('#^/admin/website/website/module/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_website_website_module_delete')), array (  '_controller' => 'Website\\WebsiteBundle\\Controller\\ModuleAdminController::deleteAction',  '_sonata_admin' => 'website.website.admin.modueleadmin',  '_sonata_name' => 'admin_website_website_module_delete',));
                    }

                    // admin_website_website_module_show
                    if (preg_match('#^/admin/website/website/module/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_website_website_module_show')), array (  '_controller' => 'Website\\WebsiteBundle\\Controller\\ModuleAdminController::showAction',  '_sonata_admin' => 'website.website.admin.modueleadmin',  '_sonata_name' => 'admin_website_website_module_show',));
                    }

                    // admin_website_website_module_export
                    if ($pathinfo === '/admin/website/website/module/export') {
                        return array (  '_controller' => 'Website\\WebsiteBundle\\Controller\\ModuleAdminController::exportAction',  '_sonata_admin' => 'website.website.admin.modueleadmin',  '_sonata_name' => 'admin_website_website_module_export',  '_route' => 'admin_website_website_module_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/website/website/page')) {
                    // admin_website_website_page_list
                    if ($pathinfo === '/admin/website/website/page/list') {
                        return array (  '_controller' => 'Website\\WebsiteBundle\\Controller\\PageAdminController::listAction',  '_sonata_admin' => 'website.website.admin.pageadmin',  '_sonata_name' => 'admin_website_website_page_list',  '_route' => 'admin_website_website_page_list',);
                    }

                    // admin_website_website_page_create
                    if ($pathinfo === '/admin/website/website/page/create') {
                        return array (  '_controller' => 'Website\\WebsiteBundle\\Controller\\PageAdminController::createAction',  '_sonata_admin' => 'website.website.admin.pageadmin',  '_sonata_name' => 'admin_website_website_page_create',  '_route' => 'admin_website_website_page_create',);
                    }

                    // admin_website_website_page_batch
                    if ($pathinfo === '/admin/website/website/page/batch') {
                        return array (  '_controller' => 'Website\\WebsiteBundle\\Controller\\PageAdminController::batchAction',  '_sonata_admin' => 'website.website.admin.pageadmin',  '_sonata_name' => 'admin_website_website_page_batch',  '_route' => 'admin_website_website_page_batch',);
                    }

                    // admin_website_website_page_edit
                    if (preg_match('#^/admin/website/website/page/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_website_website_page_edit')), array (  '_controller' => 'Website\\WebsiteBundle\\Controller\\PageAdminController::editAction',  '_sonata_admin' => 'website.website.admin.pageadmin',  '_sonata_name' => 'admin_website_website_page_edit',));
                    }

                    // admin_website_website_page_delete
                    if (preg_match('#^/admin/website/website/page/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_website_website_page_delete')), array (  '_controller' => 'Website\\WebsiteBundle\\Controller\\PageAdminController::deleteAction',  '_sonata_admin' => 'website.website.admin.pageadmin',  '_sonata_name' => 'admin_website_website_page_delete',));
                    }

                    // admin_website_website_page_show
                    if (preg_match('#^/admin/website/website/page/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_website_website_page_show')), array (  '_controller' => 'Website\\WebsiteBundle\\Controller\\PageAdminController::showAction',  '_sonata_admin' => 'website.website.admin.pageadmin',  '_sonata_name' => 'admin_website_website_page_show',));
                    }

                    // admin_website_website_page_export
                    if ($pathinfo === '/admin/website/website/page/export') {
                        return array (  '_controller' => 'Website\\WebsiteBundle\\Controller\\PageAdminController::exportAction',  '_sonata_admin' => 'website.website.admin.pageadmin',  '_sonata_name' => 'admin_website_website_page_export',  '_route' => 'admin_website_website_page_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/website/website/reference')) {
                    // admin_website_website_reference_list
                    if ($pathinfo === '/admin/website/website/reference/list') {
                        return array (  '_controller' => 'Website\\WebsiteBundle\\Controller\\ReferenceAdminController::listAction',  '_sonata_admin' => 'website.website.admin.referenceadmin',  '_sonata_name' => 'admin_website_website_reference_list',  '_route' => 'admin_website_website_reference_list',);
                    }

                    // admin_website_website_reference_create
                    if ($pathinfo === '/admin/website/website/reference/create') {
                        return array (  '_controller' => 'Website\\WebsiteBundle\\Controller\\ReferenceAdminController::createAction',  '_sonata_admin' => 'website.website.admin.referenceadmin',  '_sonata_name' => 'admin_website_website_reference_create',  '_route' => 'admin_website_website_reference_create',);
                    }

                    // admin_website_website_reference_batch
                    if ($pathinfo === '/admin/website/website/reference/batch') {
                        return array (  '_controller' => 'Website\\WebsiteBundle\\Controller\\ReferenceAdminController::batchAction',  '_sonata_admin' => 'website.website.admin.referenceadmin',  '_sonata_name' => 'admin_website_website_reference_batch',  '_route' => 'admin_website_website_reference_batch',);
                    }

                    // admin_website_website_reference_edit
                    if (preg_match('#^/admin/website/website/reference/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_website_website_reference_edit')), array (  '_controller' => 'Website\\WebsiteBundle\\Controller\\ReferenceAdminController::editAction',  '_sonata_admin' => 'website.website.admin.referenceadmin',  '_sonata_name' => 'admin_website_website_reference_edit',));
                    }

                    // admin_website_website_reference_delete
                    if (preg_match('#^/admin/website/website/reference/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_website_website_reference_delete')), array (  '_controller' => 'Website\\WebsiteBundle\\Controller\\ReferenceAdminController::deleteAction',  '_sonata_admin' => 'website.website.admin.referenceadmin',  '_sonata_name' => 'admin_website_website_reference_delete',));
                    }

                    // admin_website_website_reference_show
                    if (preg_match('#^/admin/website/website/reference/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_website_website_reference_show')), array (  '_controller' => 'Website\\WebsiteBundle\\Controller\\ReferenceAdminController::showAction',  '_sonata_admin' => 'website.website.admin.referenceadmin',  '_sonata_name' => 'admin_website_website_reference_show',));
                    }

                    // admin_website_website_reference_export
                    if ($pathinfo === '/admin/website/website/reference/export') {
                        return array (  '_controller' => 'Website\\WebsiteBundle\\Controller\\ReferenceAdminController::exportAction',  '_sonata_admin' => 'website.website.admin.referenceadmin',  '_sonata_name' => 'admin_website_website_reference_export',  '_route' => 'admin_website_website_reference_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/website/website/slideshow')) {
                    // admin_website_website_slideshow_list
                    if ($pathinfo === '/admin/website/website/slideshow/list') {
                        return array (  '_controller' => 'Website\\WebsiteBundle\\Controller\\SlideshowAdminController::listAction',  '_sonata_admin' => 'website.website.admin.slideshowadmin',  '_sonata_name' => 'admin_website_website_slideshow_list',  '_route' => 'admin_website_website_slideshow_list',);
                    }

                    // admin_website_website_slideshow_create
                    if ($pathinfo === '/admin/website/website/slideshow/create') {
                        return array (  '_controller' => 'Website\\WebsiteBundle\\Controller\\SlideshowAdminController::createAction',  '_sonata_admin' => 'website.website.admin.slideshowadmin',  '_sonata_name' => 'admin_website_website_slideshow_create',  '_route' => 'admin_website_website_slideshow_create',);
                    }

                    // admin_website_website_slideshow_batch
                    if ($pathinfo === '/admin/website/website/slideshow/batch') {
                        return array (  '_controller' => 'Website\\WebsiteBundle\\Controller\\SlideshowAdminController::batchAction',  '_sonata_admin' => 'website.website.admin.slideshowadmin',  '_sonata_name' => 'admin_website_website_slideshow_batch',  '_route' => 'admin_website_website_slideshow_batch',);
                    }

                    // admin_website_website_slideshow_edit
                    if (preg_match('#^/admin/website/website/slideshow/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_website_website_slideshow_edit')), array (  '_controller' => 'Website\\WebsiteBundle\\Controller\\SlideshowAdminController::editAction',  '_sonata_admin' => 'website.website.admin.slideshowadmin',  '_sonata_name' => 'admin_website_website_slideshow_edit',));
                    }

                    // admin_website_website_slideshow_delete
                    if (preg_match('#^/admin/website/website/slideshow/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_website_website_slideshow_delete')), array (  '_controller' => 'Website\\WebsiteBundle\\Controller\\SlideshowAdminController::deleteAction',  '_sonata_admin' => 'website.website.admin.slideshowadmin',  '_sonata_name' => 'admin_website_website_slideshow_delete',));
                    }

                    // admin_website_website_slideshow_show
                    if (preg_match('#^/admin/website/website/slideshow/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_website_website_slideshow_show')), array (  '_controller' => 'Website\\WebsiteBundle\\Controller\\SlideshowAdminController::showAction',  '_sonata_admin' => 'website.website.admin.slideshowadmin',  '_sonata_name' => 'admin_website_website_slideshow_show',));
                    }

                    // admin_website_website_slideshow_export
                    if ($pathinfo === '/admin/website/website/slideshow/export') {
                        return array (  '_controller' => 'Website\\WebsiteBundle\\Controller\\SlideshowAdminController::exportAction',  '_sonata_admin' => 'website.website.admin.slideshowadmin',  '_sonata_name' => 'admin_website_website_slideshow_export',  '_route' => 'admin_website_website_slideshow_export',);
                    }

                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
