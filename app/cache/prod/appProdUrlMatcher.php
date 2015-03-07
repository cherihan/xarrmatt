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

        if (0 === strpos($pathinfo, '/utilisateur')) {
            // utilisateur
            if (rtrim($pathinfo, '/') === '/utilisateur') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'utilisateur');
                }

                return array (  '_controller' => 'Xm\\UserBundle\\Controller\\UserController::indexAction',  '_route' => 'utilisateur',);
            }

            // utilisateur_show
            if (preg_match('#^/utilisateur/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'utilisateur_show')), array (  '_controller' => 'Xm\\UserBundle\\Controller\\UserController::showAction',));
            }

            // utilisateur_new
            if ($pathinfo === '/utilisateur/new') {
                return array (  '_controller' => 'Xm\\UserBundle\\Controller\\UserController::newAction',  '_route' => 'utilisateur_new',);
            }

            // utilisateur_create
            if ($pathinfo === '/utilisateur/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_utilisateur_create;
                }

                return array (  '_controller' => 'Xm\\UserBundle\\Controller\\UserController::createAction',  '_route' => 'utilisateur_create',);
            }
            not_utilisateur_create:

            // utilisateur_edit
            if (preg_match('#^/utilisateur/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'utilisateur_edit')), array (  '_controller' => 'Xm\\UserBundle\\Controller\\UserController::editAction',));
            }

            // utilisateur_update
            if (preg_match('#^/utilisateur/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_utilisateur_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'utilisateur_update')), array (  '_controller' => 'Xm\\UserBundle\\Controller\\UserController::updateAction',));
            }
            not_utilisateur_update:

            // utilisateur_delete
            if (preg_match('#^/utilisateur/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_utilisateur_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'utilisateur_delete')), array (  '_controller' => 'Xm\\UserBundle\\Controller\\UserController::deleteAction',));
            }
            not_utilisateur_delete:

            if (0 === strpos($pathinfo, '/utilisateur/message')) {
                // message
                if (rtrim($pathinfo, '/') === '/utilisateur/message') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'message');
                    }

                    return array (  '_controller' => 'Xm\\UserBundle\\Controller\\MessageController::indexAction',  '_route' => 'message',);
                }

                // message_show
                if (preg_match('#^/utilisateur/message/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'message_show')), array (  '_controller' => 'Xm\\UserBundle\\Controller\\MessageController::showAction',));
                }

                // message_new
                if ($pathinfo === '/utilisateur/message/new') {
                    return array (  '_controller' => 'Xm\\UserBundle\\Controller\\MessageController::newAction',  '_route' => 'message_new',);
                }

                // message_create
                if ($pathinfo === '/utilisateur/message/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_message_create;
                    }

                    return array (  '_controller' => 'Xm\\UserBundle\\Controller\\MessageController::createAction',  '_route' => 'message_create',);
                }
                not_message_create:

                // message_edit
                if (preg_match('#^/utilisateur/message/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'message_edit')), array (  '_controller' => 'Xm\\UserBundle\\Controller\\MessageController::editAction',));
                }

                // message_update
                if (preg_match('#^/utilisateur/message/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_message_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'message_update')), array (  '_controller' => 'Xm\\UserBundle\\Controller\\MessageController::updateAction',));
                }
                not_message_update:

                // message_delete
                if (preg_match('#^/utilisateur/message/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_message_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'message_delete')), array (  '_controller' => 'Xm\\UserBundle\\Controller\\MessageController::deleteAction',));
                }
                not_message_delete:

            }

        }

        // xm_covoiturage_homepage
        if (rtrim($pathinfo, '/') === '/covoiturage') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'xm_covoiturage_homepage');
            }

            return array (  '_controller' => 'Xm\\CovoiturageBundle\\Controller\\DefaultController::indexAction',  '_route' => 'xm_covoiturage_homepage',);
        }

        // xm_main_accueil
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'xm_main_accueil');
            }

            return array (  '_controller' => 'Xm\\MainBundle\\Controller\\DefaultController::indexAction',  '_route' => 'xm_main_accueil',);
        }

        // xm_main_connexion
        if ($pathinfo === '/connexion') {
            return array (  '_controller' => 'Xm\\MainBundle\\Controller\\DefaultController::connexionAction',  '_route' => 'xm_main_connexion',);
        }

        // xm_main_validation_connexion
        if ($pathinfo === '/validation_connexion') {
            return array('_route' => 'xm_main_validation_connexion');
        }

        // xm_main_deconnexion
        if ($pathinfo === '/logout') {
            return array('_route' => 'xm_main_deconnexion');
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
