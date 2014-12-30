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

        // Union_Creation
        if ($pathinfo === '/Union_Creation') {
            return array (  '_controller' => 'Acme\\adminBundle\\Controller\\DefaultController::Union_CreationAction',  '_route' => 'Union_Creation',);
        }

        // Login
        if ($pathinfo === '/Login') {
            return array (  '_controller' => 'Acme\\adminBundle\\Controller\\DefaultController::loginAction',  '_route' => 'Login',);
        }

        // SMS
        if ($pathinfo === '/SMS') {
            return array (  '_controller' => 'Acme\\adminBundle\\Controller\\DefaultController::smsAction',  '_route' => 'SMS',);
        }

        // Newsmaster
        if ($pathinfo === '/Newsmaster') {
            return array (  '_controller' => 'Acme\\adminBundle\\Controller\\DefaultController::NewsmasterAction',  '_route' => 'Newsmaster',);
        }

        // Announcementmaste
        if ($pathinfo === '/Announcementmaste') {
            return array (  '_controller' => 'Acme\\adminBundle\\Controller\\DefaultController::AnnouncementmasteAction',  '_route' => 'Announcementmaste',);
        }

        // unionadmin
        if ($pathinfo === '/unionadmin') {
            return array (  '_controller' => 'Acme\\adminBundle\\Controller\\DefaultController::unionadminAction',  '_route' => 'unionadmin',);
        }

        // mmut
        if ($pathinfo === '/mmut') {
            return array (  '_controller' => 'Acme\\adminBundle\\Controller\\DefaultController::mmutAction',  '_route' => 'mmut',);
        }

        // data_tool
        if ($pathinfo === '/data_tool') {
            return array (  '_controller' => 'Acme\\adminBundle\\Controller\\DefaultController::datatoolAction',  '_route' => 'data_tool',);
        }

        // request_solve_master
        if ($pathinfo === '/request_solve_master') {
            return array (  '_controller' => 'Acme\\adminBundle\\Controller\\DefaultController::request_solve_masterAction',  '_route' => 'request_solve_master',);
        }

        // meeting_data_setting
        if ($pathinfo === '/meeting_data_setting') {
            return array (  '_controller' => 'Acme\\adminBundle\\Controller\\DefaultController::meeting_data_settingAction',  '_route' => 'meeting_data_setting',);
        }

        // recirpient_master
        if ($pathinfo === '/recirpient_master') {
            return array (  '_controller' => 'Acme\\adminBundle\\Controller\\DefaultController::recirpient_masterAction',  '_route' => 'recirpient_master',);
        }

        // Society
        if ($pathinfo === '/Society') {
            return array (  '_controller' => 'Acme\\adminBundle\\Controller\\UnionAdminController::SocietyAction',  '_route' => 'Society',);
        }

        // Village
        if ($pathinfo === '/Village') {
            return array (  '_controller' => 'Acme\\adminBundle\\Controller\\UnionAdminController::VillageAction',  '_route' => 'Village',);
        }

        // HouseHold
        if ($pathinfo === '/HouseHold') {
            return array (  '_controller' => 'Acme\\adminBundle\\Controller\\UnionAdminController::HouseHoldAction',  '_route' => 'HouseHold',);
        }

        // UserMaster
        if ($pathinfo === '/UserMaster') {
            return array (  '_controller' => 'Acme\\adminBundle\\Controller\\UnionAdminController::UserMasterAction',  '_route' => 'UserMaster',);
        }

        // ChangePassword
        if ($pathinfo === '/ChangePassword') {
            return array (  '_controller' => 'Acme\\adminBundle\\Controller\\CommanAdminController::ChangePasswordAction',  '_route' => 'ChangePassword',);
        }

        if (0 === strpos($pathinfo, '/Animal')) {
            // AnimalMaster
            if ($pathinfo === '/AnimalMaster') {
                return array (  '_controller' => 'Acme\\adminBundle\\Controller\\CommanAdminController::AnimalMasterAction',  '_route' => 'AnimalMaster',);
            }

            // AnimalRetagging
            if ($pathinfo === '/AnimalRetagging') {
                return array (  '_controller' => 'Acme\\adminBundle\\Controller\\CommanAdminController::AnimalRetaggingAction',  '_route' => 'AnimalRetagging',);
            }

            // AnimalMovement
            if ($pathinfo === '/AnimalMovement') {
                return array (  '_controller' => 'Acme\\adminBundle\\Controller\\CommanAdminController::AnimalMovementAction',  '_route' => 'AnimalMovement',);
            }

        }

        // Link_Grahak_to_Animal
        if ($pathinfo === '/Link_Grahak_to_Animal') {
            return array (  '_controller' => 'Acme\\adminBundle\\Controller\\CommanAdminController::Link_Grahak_to_AnimalAction',  '_route' => 'Link_Grahak_to_Animal',);
        }

        if (0 === strpos($pathinfo, '/Camp')) {
            // CampMaster
            if ($pathinfo === '/CampMaster') {
                return array (  '_controller' => 'Acme\\adminBundle\\Controller\\FipController::CampMasterAction',  '_route' => 'CampMaster',);
            }

            // CampVisit
            if ($pathinfo === '/CampVisit') {
                return array (  '_controller' => 'Acme\\adminBundle\\Controller\\FipController::CampVisitAction',  '_route' => 'CampVisit',);
            }

        }

        // Add_Animal_in_FIP
        if ($pathinfo === '/Add_Animal_in_FIP') {
            return array (  '_controller' => 'Acme\\adminBundle\\Controller\\FipController::Add_Animal_in_FIPAction',  '_route' => 'Add_Animal_in_FIP',);
        }

        // PEP
        if ($pathinfo === '/PEP') {
            return array (  '_controller' => 'Acme\\adminBundle\\Controller\\PEPAdminController::PEPAction',  '_route' => 'PEP',);
        }

        // Bull_master
        if ($pathinfo === '/Bull_master') {
            return array (  '_controller' => 'Acme\\adminBundle\\Controller\\PEPAdminController::Bull_masterAction',  '_route' => 'Bull_master',);
        }

        if (0 === strpos($pathinfo, '/AI_')) {
            // AI_technical_Employee_Master
            if ($pathinfo === '/AI_technical_Employee_Master') {
                return array (  '_controller' => 'Acme\\adminBundle\\Controller\\PEPAdminController::AI_technical_Employee_MasterAction',  '_route' => 'AI_technical_Employee_Master',);
            }

            // AI_center
            if ($pathinfo === '/AI_center') {
                return array (  '_controller' => 'Acme\\adminBundle\\Controller\\PEPAdminController::AI_centerAction',  '_route' => 'AI_center',);
            }

            // AI_technician
            if ($pathinfo === '/AI_technician') {
                return array (  '_controller' => 'Acme\\adminBundle\\Controller\\PEPAdminController::AI_technicianAction',  '_route' => 'AI_technician',);
            }

            if (0 === strpos($pathinfo, '/AI_Animal_')) {
                // AI_Animal_master
                if ($pathinfo === '/AI_Animal_master') {
                    return array (  '_controller' => 'Acme\\adminBundle\\Controller\\PEPAdminController::AI_Animal_masterAction',  '_route' => 'AI_Animal_master',);
                }

                // AI_Animal_Movement
                if ($pathinfo === '/AI_Animal_Movement') {
                    return array (  '_controller' => 'Acme\\adminBundle\\Controller\\PEPAdminController::AI_Animal_MovementAction',  '_route' => 'AI_Animal_Movement',);
                }

            }

        }

        // Death_Sold_Register
        if ($pathinfo === '/Death_Sold_Register') {
            return array (  '_controller' => 'Acme\\adminBundle\\Controller\\PEPAdminController::Death_Sold_RegisterAction',  '_route' => 'Death_Sold_Register',);
        }

        if (0 === strpos($pathinfo, '/hello')) {
            // contactus_homepage
            if (preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'contactus_homepage')), array (  '_controller' => 'AcmecontactusBundle\\Controller\\DefaultController::indexAction',));
            }

            // register_homepage
            if (preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'register_homepage')), array (  '_controller' => 'AcmeRegisterBundle\\Controller\\DefaultController::indexAction',));
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _demo_security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_demo_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
