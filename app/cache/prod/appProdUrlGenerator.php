<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'utilisateur' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Xm\\UserBundle\\Controller\\UserController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/utilisateur/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'utilisateur_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Xm\\UserBundle\\Controller\\UserController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/utilisateur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'utilisateur_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Xm\\UserBundle\\Controller\\UserController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/utilisateur/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'utilisateur_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Xm\\UserBundle\\Controller\\UserController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/utilisateur/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'utilisateur_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Xm\\UserBundle\\Controller\\UserController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/utilisateur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'utilisateur_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Xm\\UserBundle\\Controller\\UserController::updateAction',  ),  2 =>   array (    '_method' => 'POST|PUT',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/utilisateur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'utilisateur_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Xm\\UserBundle\\Controller\\UserController::deleteAction',  ),  2 =>   array (    '_method' => 'POST|DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/utilisateur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'message' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Xm\\UserBundle\\Controller\\MessageController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/utilisateur/message/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'message_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Xm\\UserBundle\\Controller\\MessageController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/utilisateur/message',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'message_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Xm\\UserBundle\\Controller\\MessageController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/utilisateur/message/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'message_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Xm\\UserBundle\\Controller\\MessageController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/utilisateur/message/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'message_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Xm\\UserBundle\\Controller\\MessageController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/utilisateur/message',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'message_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Xm\\UserBundle\\Controller\\MessageController::updateAction',  ),  2 =>   array (    '_method' => 'POST|PUT',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/utilisateur/message',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'message_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Xm\\UserBundle\\Controller\\MessageController::deleteAction',  ),  2 =>   array (    '_method' => 'POST|DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/utilisateur/message',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'xm_covoiturage_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Xm\\CovoiturageBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/covoiturage/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'xm_main_accueil' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Xm\\MainBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'xm_main_connexion' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Xm\\MainBundle\\Controller\\DefaultController::connexionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/connexion',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'xm_main_validation_connexion' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/validation_connexion',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'xm_main_deconnexion' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
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
