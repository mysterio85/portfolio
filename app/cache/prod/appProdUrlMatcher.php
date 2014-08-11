<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_WebsiteWebsiteBundle_contact;
                }

                return array (  '_controller' => 'WebsiteWebsiteBundle:Contact:contact',  '_route' => 'WebsiteWebsiteBundle_contact',);
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

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
