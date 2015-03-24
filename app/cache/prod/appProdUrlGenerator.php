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
        'yes_we_scan_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'YesWeScan\\YesWeScanBundle\\Controller\\HomeController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'yes_we_scan_profil' => array (  0 =>   array (    0 => 'idUser',  ),  1 =>   array (    '_controller' => 'YesWeScan\\YesWeScanBundle\\Controller\\ProfilController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idUser',    ),    1 =>     array (      0 => 'text',      1 => '/profil',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'yes_we_scan_profil_question' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'YesWeScan\\YesWeScanBundle\\Controller\\ProfilController::questionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profil/question',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'yes_we_scan_profil_sondage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'YesWeScan\\YesWeScanBundle\\Controller\\ProfilController::sondageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profil/sondage',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'yes_we_scan_sondage_statistique' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'YesWeScan\\YesWeScanBundle\\Controller\\SondageController::statistiqueAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/statistique',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/sondage',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'yes_we_scan_sondage_creation' => array (  0 =>   array (    0 => 'idUser',  ),  1 =>   array (    '_controller' => 'YesWeScan\\YesWeScanBundle\\Controller\\SondageController::creationAction',    'etape' => 1,    'idUser' => 0,  ),  2 =>   array (    'idUser' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'idUser',    ),    1 =>     array (      0 => 'text',      1 => '/sondage/creation/1',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'yes_we_scan_sondage_creation_etape_2' => array (  0 =>   array (    0 => 'idUser',    1 => 'idSondage',  ),  1 =>   array (    '_controller' => 'YesWeScan\\YesWeScanBundle\\Controller\\HotspotController::creationAction',    'etape' => 2,    'idUser' => 0,  ),  2 =>   array (    'idUser' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idSondage',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'idUser',    ),    2 =>     array (      0 => 'text',      1 => '/sondage/creation/2',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'yes_we_scan_sondage_print' => array (  0 =>   array (    0 => 'idUser',    1 => 'idSondage',  ),  1 =>   array (    '_controller' => 'YesWeScan\\YesWeScanBundle\\Controller\\SondageController::printAction',    'idUser' => 0,  ),  2 =>   array (    'idUser' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idSondage',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'idUser',    ),    2 =>     array (      0 => 'text',      1 => '/sondage/print',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'yes_we_scan_sondage_vote' => array (  0 =>   array (    0 => 'idSondage',    1 => 'numReponse',  ),  1 =>   array (    '_controller' => 'YesWeScan\\YesWeScanBundle\\Controller\\SondageController::voteAction',  ),  2 =>   array (    'idUser' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'numReponse',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idSondage',    ),    2 =>     array (      0 => 'text',      1 => '/sondage/vote',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'yes_we_scan_rechercher' => array (  0 =>   array (    0 => 'search',    1 => 'classement',  ),  1 =>   array (    '_controller' => 'YesWeScanBundle:Rechercher:rechercher',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'classement',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'search',    ),    2 =>     array (      0 => 'text',      1 => '/rechercher',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'endroid_qrcode' => array (  0 =>   array (    0 => 'text',    1 => 'extension',  ),  1 =>   array (    '_controller' => 'Endroid\\Bundle\\QrCodeBundle\\Controller\\QrCodeController::generateAction',  ),  2 =>   array (    'text' => '[\\w\\W]+',    'extension' => 'jpg|png|gif',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'jpg|png|gif',      3 => 'extension',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[\\w\\W]+',      3 => 'text',    ),    2 =>     array (      0 => 'text',      1 => '/qrcode',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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
