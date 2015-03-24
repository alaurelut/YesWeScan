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

        // yes_we_scan_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'yes_we_scan_homepage');
            }

            return array (  '_controller' => 'YesWeScan\\YesWeScanBundle\\Controller\\HomeController::indexAction',  '_route' => 'yes_we_scan_homepage',);
        }

        if (0 === strpos($pathinfo, '/profil')) {
            // yes_we_scan_profil
            if (preg_match('#^/profil/(?P<idUser>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'yes_we_scan_profil')), array (  '_controller' => 'YesWeScan\\YesWeScanBundle\\Controller\\ProfilController::indexAction',));
            }

            // yes_we_scan_profil_question
            if ($pathinfo === '/profil/question') {
                return array (  '_controller' => 'YesWeScan\\YesWeScanBundle\\Controller\\ProfilController::questionAction',  '_route' => 'yes_we_scan_profil_question',);
            }

            // yes_we_scan_profil_sondage
            if ($pathinfo === '/profil/sondage') {
                return array (  '_controller' => 'YesWeScan\\YesWeScanBundle\\Controller\\ProfilController::sondageAction',  '_route' => 'yes_we_scan_profil_sondage',);
            }

        }

        if (0 === strpos($pathinfo, '/sondage')) {
            // yes_we_scan_sondage_statistique
            if (preg_match('#^/sondage/(?P<id>\\d+)/statistique$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'yes_we_scan_sondage_statistique')), array (  '_controller' => 'YesWeScan\\YesWeScanBundle\\Controller\\SondageController::statistiqueAction',));
            }

            if (0 === strpos($pathinfo, '/sondage/creation')) {
                // yes_we_scan_sondage_creation
                if (0 === strpos($pathinfo, '/sondage/creation/1') && preg_match('#^/sondage/creation/1(?:/(?P<idUser>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'yes_we_scan_sondage_creation')), array (  '_controller' => 'YesWeScan\\YesWeScanBundle\\Controller\\SondageController::creationAction',  'etape' => 1,  'idUser' => 0,));
                }

                // yes_we_scan_sondage_creation_etape_2
                if (0 === strpos($pathinfo, '/sondage/creation/2') && preg_match('#^/sondage/creation/2/(?P<idUser>\\d+)/(?P<idSondage>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'yes_we_scan_sondage_creation_etape_2')), array (  '_controller' => 'YesWeScan\\YesWeScanBundle\\Controller\\HotspotController::creationAction',  'etape' => 2,  'idUser' => 0,));
                }

            }

            // yes_we_scan_sondage_print
            if (0 === strpos($pathinfo, '/sondage/print') && preg_match('#^/sondage/print/(?P<idUser>\\d+)/(?P<idSondage>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'yes_we_scan_sondage_print')), array (  '_controller' => 'YesWeScan\\YesWeScanBundle\\Controller\\SondageController::printAction',  'idUser' => 0,));
            }

            // yes_we_scan_sondage_vote
            if (0 === strpos($pathinfo, '/sondage/vote') && preg_match('#^/sondage/vote/(?P<idSondage>[^/]++)/(?P<numReponse>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'yes_we_scan_sondage_vote')), array (  '_controller' => 'YesWeScan\\YesWeScanBundle\\Controller\\SondageController::voteAction',));
            }

        }

        // yes_we_scan_rechercher
        if (0 === strpos($pathinfo, '/rechercher') && preg_match('#^/rechercher/(?P<search>[^/]++)/(?P<classement>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'yes_we_scan_rechercher')), array (  '_controller' => 'YesWeScanBundle:Rechercher:rechercher',));
        }

        // endroid_qrcode
        if (0 === strpos($pathinfo, '/qrcode') && preg_match('#^/qrcode/(?P<text>[\\w\\W]+)\\.(?P<extension>jpg|png|gif)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'endroid_qrcode')), array (  '_controller' => 'Endroid\\Bundle\\QrCodeBundle\\Controller\\QrCodeController::generateAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
