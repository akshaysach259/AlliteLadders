<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // admin_default_index
        if ($pathinfo === '/administrator') {
            return array (  '_controller' => 'AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'admin_default_index',);
        }

        // _page_home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_page_home');
            }

            return array (  '_controller' => 'ProjectCmsBundle\\Controller\\DefaultController::indexAction',  '_route' => '_page_home',);
        }

        // projectcms_default_header
        if ($pathinfo === '/header') {
            return array (  '_controller' => 'ProjectCmsBundle\\Controller\\DefaultController::headerAction',  '_route' => 'projectcms_default_header',);
        }

        // projectcms_default_footer
        if ($pathinfo === '/footer') {
            return array (  '_controller' => 'ProjectCmsBundle\\Controller\\DefaultController::footerAction',  '_route' => 'projectcms_default_footer',);
        }

        // projectcms_default_slider
        if ($pathinfo === '/slider') {
            return array (  '_controller' => 'ProjectCmsBundle\\Controller\\DefaultController::sliderAction',  '_route' => 'projectcms_default_slider',);
        }

        // projectcms_default_fabricationslider
        if ($pathinfo === '/fabricationslider') {
            return array (  '_controller' => 'ProjectCmsBundle\\Controller\\DefaultController::fabricationsliderAction',  '_route' => 'projectcms_default_fabricationslider',);
        }

        // _page_article_detail
        if (preg_match('#^/(?P<urlAlias>[^/\\.]++)\\.html$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => '_page_article_detail')), array (  '_controller' => 'ProjectCmsBundle\\Controller\\DefaultController::detailAction',));
        }

        if (0 === strpos($pathinfo, '/pro')) {
            // _page_product_detail
            if (0 === strpos($pathinfo, '/product') && preg_match('#^/product/(?P<urlAlias>[^/\\.]++)\\.html$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_page_product_detail')), array (  '_controller' => 'ProjectCmsBundle\\Controller\\DefaultController::productdetailAction',));
            }

            // _page_project_detail
            if (0 === strpos($pathinfo, '/project') && preg_match('#^/project/(?P<urlAlias>[^/\\.]++)\\.html$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_page_project_detail')), array (  '_controller' => 'ProjectCmsBundle\\Controller\\DefaultController::projectdetailAction',));
            }

        }

        // _page_blog_detail
        if (0 === strpos($pathinfo, '/blog') && preg_match('#^/blog/(?P<urlAlias>[^/\\.]++)\\.html$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => '_page_blog_detail')), array (  '_controller' => 'ProjectCmsBundle\\Controller\\DefaultController::blogdetailAction',));
        }

        // _page_menulist
        if ($pathinfo === '/menulist') {
            return array (  '_controller' => 'ProjectCmsBundle\\Controller\\DefaultController::menulistAction',  '_route' => '_page_menulist',);
        }

        // _page_thankyou
        if ($pathinfo === '/thankyou.php') {
            return array (  '_controller' => 'ProjectCmsBundle\\Controller\\DefaultController::thankyouAction',  '_route' => '_page_thankyou',);
        }

        if (0 === strpos($pathinfo, '/fabrication')) {
            // _page_msfabrication_list
            if (preg_match('#^/fabrication/(?P<urlAlias>[^/\\.]++)\\.html$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_page_msfabrication_list')), array (  '_controller' => 'ProjectCmsBundle\\Controller\\DefaultController::fabricationAction',));
            }

            // _page_fabrication_detail
            if (0 === strpos($pathinfo, '/fabricationdetail') && preg_match('#^/fabricationdetail/(?P<urlAlias>[^/\\.]++)\\.html$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_page_fabrication_detail')), array (  '_controller' => 'ProjectCmsBundle\\Controller\\DefaultController::fabricationdetailAction',));
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/change-password/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/log')) {
                if (0 === strpos($pathinfo, '/admin/login')) {
                    // sonata_user_admin_security_login
                    if ($pathinfo === '/admin/login') {
                        return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::loginAction',  '_route' => 'sonata_user_admin_security_login',);
                    }

                    // sonata_user_admin_security_check
                    if ($pathinfo === '/admin/login_check') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_sonata_user_admin_security_check;
                        }

                        return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::checkAction',  '_route' => 'sonata_user_admin_security_check',);
                    }
                    not_sonata_user_admin_security_check:

                }

                // sonata_user_admin_security_logout
                if ($pathinfo === '/admin/logout') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::logoutAction',  '_route' => 'sonata_user_admin_security_logout',);
                }

            }

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

            // sonata_admin_retrieve_autocomplete_items
            if ($pathinfo === '/admin/core/get-autocomplete-items') {
                return array (  '_controller' => 'sonata.admin.controller.admin:retrieveAutocompleteItemsAction',  '_route' => 'sonata_admin_retrieve_autocomplete_items',);
            }

        }

        if (0 === strpos($pathinfo, '/media')) {
            if (0 === strpos($pathinfo, '/media/gallery')) {
                // sonata_media_gallery_index
                if (rtrim($pathinfo, '/') === '/media/gallery') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sonata_media_gallery_index');
                    }

                    return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryController::indexAction',  '_route' => 'sonata_media_gallery_index',);
                }

                // sonata_media_gallery_view
                if (0 === strpos($pathinfo, '/media/gallery/view') && preg_match('#^/media/gallery/view/(?P<id>.*)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_media_gallery_view')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryController::viewAction',));
                }

            }

            // sonata_media_view
            if (0 === strpos($pathinfo, '/media/view') && preg_match('#^/media/view/(?P<id>[^/]++)(?:/(?P<format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_media_view')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaController::viewAction',  'format' => 'reference',));
            }

            // sonata_media_download
            if (0 === strpos($pathinfo, '/media/download') && preg_match('#^/media/download/(?P<id>.*)(?:/(?P<format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_media_download')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaController::downloadAction',  'format' => 'reference',));
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/sonata')) {
                if (0 === strpos($pathinfo, '/admin/sonata/media')) {
                    if (0 === strpos($pathinfo, '/admin/sonata/media/media')) {
                        // admin_sonata_media_media_list
                        if ($pathinfo === '/admin/sonata/media/media/list') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::listAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_list',  '_route' => 'admin_sonata_media_media_list',);
                        }

                        // admin_sonata_media_media_create
                        if ($pathinfo === '/admin/sonata/media/media/create') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::createAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_create',  '_route' => 'admin_sonata_media_media_create',);
                        }

                        // admin_sonata_media_media_batch
                        if ($pathinfo === '/admin/sonata/media/media/batch') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::batchAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_batch',  '_route' => 'admin_sonata_media_media_batch',);
                        }

                        // admin_sonata_media_media_edit
                        if (preg_match('#^/admin/sonata/media/media/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_media_edit')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::editAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_edit',));
                        }

                        // admin_sonata_media_media_delete
                        if (preg_match('#^/admin/sonata/media/media/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_media_delete')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::deleteAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_delete',));
                        }

                        // admin_sonata_media_media_show
                        if (preg_match('#^/admin/sonata/media/media/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_media_show')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::showAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_show',));
                        }

                        // admin_sonata_media_media_export
                        if ($pathinfo === '/admin/sonata/media/media/export') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::exportAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_export',  '_route' => 'admin_sonata_media_media_export',);
                        }

                        if (0 === strpos($pathinfo, '/admin/sonata/media/media/ckeditor_')) {
                            // admin_sonata_media_media_ckeditor_browser
                            if ($pathinfo === '/admin/sonata/media/media/ckeditor_browser') {
                                return array (  '_controller' => 'Sonata\\FormatterBundle\\Controller\\CkeditorAdminController::browserAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_ckeditor_browser',  '_route' => 'admin_sonata_media_media_ckeditor_browser',);
                            }

                            // admin_sonata_media_media_ckeditor_upload
                            if ($pathinfo === '/admin/sonata/media/media/ckeditor_upload') {
                                return array (  '_controller' => 'Sonata\\FormatterBundle\\Controller\\CkeditorAdminController::uploadAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_ckeditor_upload',  '_route' => 'admin_sonata_media_media_ckeditor_upload',);
                            }

                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/sonata/media/gallery')) {
                        // admin_sonata_media_gallery_list
                        if ($pathinfo === '/admin/sonata/media/gallery/list') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::listAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_list',  '_route' => 'admin_sonata_media_gallery_list',);
                        }

                        // admin_sonata_media_gallery_create
                        if ($pathinfo === '/admin/sonata/media/gallery/create') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::createAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_create',  '_route' => 'admin_sonata_media_gallery_create',);
                        }

                        // admin_sonata_media_gallery_batch
                        if ($pathinfo === '/admin/sonata/media/gallery/batch') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::batchAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_batch',  '_route' => 'admin_sonata_media_gallery_batch',);
                        }

                        // admin_sonata_media_gallery_edit
                        if (preg_match('#^/admin/sonata/media/gallery/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_gallery_edit')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::editAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_edit',));
                        }

                        // admin_sonata_media_gallery_delete
                        if (preg_match('#^/admin/sonata/media/gallery/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_gallery_delete')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::deleteAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_delete',));
                        }

                        // admin_sonata_media_gallery_show
                        if (preg_match('#^/admin/sonata/media/gallery/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_gallery_show')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::showAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_show',));
                        }

                        // admin_sonata_media_gallery_export
                        if ($pathinfo === '/admin/sonata/media/gallery/export') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::exportAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_export',  '_route' => 'admin_sonata_media_gallery_export',);
                        }

                        if (0 === strpos($pathinfo, '/admin/sonata/media/galleryhasmedia')) {
                            // admin_sonata_media_galleryhasmedia_list
                            if ($pathinfo === '/admin/sonata/media/galleryhasmedia/list') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_list',  '_route' => 'admin_sonata_media_galleryhasmedia_list',);
                            }

                            // admin_sonata_media_galleryhasmedia_create
                            if ($pathinfo === '/admin/sonata/media/galleryhasmedia/create') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_create',  '_route' => 'admin_sonata_media_galleryhasmedia_create',);
                            }

                            // admin_sonata_media_galleryhasmedia_batch
                            if ($pathinfo === '/admin/sonata/media/galleryhasmedia/batch') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_batch',  '_route' => 'admin_sonata_media_galleryhasmedia_batch',);
                            }

                            // admin_sonata_media_galleryhasmedia_edit
                            if (preg_match('#^/admin/sonata/media/galleryhasmedia/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_galleryhasmedia_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_edit',));
                            }

                            // admin_sonata_media_galleryhasmedia_delete
                            if (preg_match('#^/admin/sonata/media/galleryhasmedia/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_galleryhasmedia_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_delete',));
                            }

                            // admin_sonata_media_galleryhasmedia_show
                            if (preg_match('#^/admin/sonata/media/galleryhasmedia/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_galleryhasmedia_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_show',));
                            }

                            // admin_sonata_media_galleryhasmedia_export
                            if ($pathinfo === '/admin/sonata/media/galleryhasmedia/export') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_export',  '_route' => 'admin_sonata_media_galleryhasmedia_export',);
                            }

                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/sonata/user')) {
                    if (0 === strpos($pathinfo, '/admin/sonata/user/user')) {
                        // admin_sonata_user_user_list
                        if ($pathinfo === '/admin/sonata/user/user/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_list',  '_route' => 'admin_sonata_user_user_list',);
                        }

                        // admin_sonata_user_user_create
                        if ($pathinfo === '/admin/sonata/user/user/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_create',  '_route' => 'admin_sonata_user_user_create',);
                        }

                        // admin_sonata_user_user_batch
                        if ($pathinfo === '/admin/sonata/user/user/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_batch',  '_route' => 'admin_sonata_user_user_batch',);
                        }

                        // admin_sonata_user_user_edit
                        if (preg_match('#^/admin/sonata/user/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_user_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_edit',));
                        }

                        // admin_sonata_user_user_delete
                        if (preg_match('#^/admin/sonata/user/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_user_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_delete',));
                        }

                        // admin_sonata_user_user_show
                        if (preg_match('#^/admin/sonata/user/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_user_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_show',));
                        }

                        // admin_sonata_user_user_export
                        if ($pathinfo === '/admin/sonata/user/user/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_export',  '_route' => 'admin_sonata_user_user_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/sonata/user/group')) {
                        // admin_sonata_user_group_list
                        if ($pathinfo === '/admin/sonata/user/group/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_list',  '_route' => 'admin_sonata_user_group_list',);
                        }

                        // admin_sonata_user_group_create
                        if ($pathinfo === '/admin/sonata/user/group/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_create',  '_route' => 'admin_sonata_user_group_create',);
                        }

                        // admin_sonata_user_group_batch
                        if ($pathinfo === '/admin/sonata/user/group/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_batch',  '_route' => 'admin_sonata_user_group_batch',);
                        }

                        // admin_sonata_user_group_edit
                        if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_group_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_edit',));
                        }

                        // admin_sonata_user_group_delete
                        if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_group_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_delete',));
                        }

                        // admin_sonata_user_group_show
                        if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_group_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_show',));
                        }

                        // admin_sonata_user_group_export
                        if ($pathinfo === '/admin/sonata/user/group/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_export',  '_route' => 'admin_sonata_user_group_export',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/sonata/classification')) {
                    if (0 === strpos($pathinfo, '/admin/sonata/classification/category')) {
                        // admin_sonata_classification_category_list
                        if ($pathinfo === '/admin/sonata/classification/category/list') {
                            return array (  '_controller' => 'Sonata\\ClassificationBundle\\Controller\\CategoryAdminController::listAction',  '_sonata_admin' => 'sonata.classification.admin.category',  '_sonata_name' => 'admin_sonata_classification_category_list',  '_route' => 'admin_sonata_classification_category_list',);
                        }

                        // admin_sonata_classification_category_create
                        if ($pathinfo === '/admin/sonata/classification/category/create') {
                            return array (  '_controller' => 'Sonata\\ClassificationBundle\\Controller\\CategoryAdminController::createAction',  '_sonata_admin' => 'sonata.classification.admin.category',  '_sonata_name' => 'admin_sonata_classification_category_create',  '_route' => 'admin_sonata_classification_category_create',);
                        }

                        // admin_sonata_classification_category_batch
                        if ($pathinfo === '/admin/sonata/classification/category/batch') {
                            return array (  '_controller' => 'Sonata\\ClassificationBundle\\Controller\\CategoryAdminController::batchAction',  '_sonata_admin' => 'sonata.classification.admin.category',  '_sonata_name' => 'admin_sonata_classification_category_batch',  '_route' => 'admin_sonata_classification_category_batch',);
                        }

                        // admin_sonata_classification_category_edit
                        if (preg_match('#^/admin/sonata/classification/category/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_classification_category_edit')), array (  '_controller' => 'Sonata\\ClassificationBundle\\Controller\\CategoryAdminController::editAction',  '_sonata_admin' => 'sonata.classification.admin.category',  '_sonata_name' => 'admin_sonata_classification_category_edit',));
                        }

                        // admin_sonata_classification_category_delete
                        if (preg_match('#^/admin/sonata/classification/category/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_classification_category_delete')), array (  '_controller' => 'Sonata\\ClassificationBundle\\Controller\\CategoryAdminController::deleteAction',  '_sonata_admin' => 'sonata.classification.admin.category',  '_sonata_name' => 'admin_sonata_classification_category_delete',));
                        }

                        // admin_sonata_classification_category_show
                        if (preg_match('#^/admin/sonata/classification/category/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_classification_category_show')), array (  '_controller' => 'Sonata\\ClassificationBundle\\Controller\\CategoryAdminController::showAction',  '_sonata_admin' => 'sonata.classification.admin.category',  '_sonata_name' => 'admin_sonata_classification_category_show',));
                        }

                        // admin_sonata_classification_category_export
                        if ($pathinfo === '/admin/sonata/classification/category/export') {
                            return array (  '_controller' => 'Sonata\\ClassificationBundle\\Controller\\CategoryAdminController::exportAction',  '_sonata_admin' => 'sonata.classification.admin.category',  '_sonata_name' => 'admin_sonata_classification_category_export',  '_route' => 'admin_sonata_classification_category_export',);
                        }

                        // admin_sonata_classification_category_tree
                        if ($pathinfo === '/admin/sonata/classification/category/tree') {
                            return array (  '_controller' => 'Sonata\\ClassificationBundle\\Controller\\CategoryAdminController::treeAction',  '_sonata_admin' => 'sonata.classification.admin.category',  '_sonata_name' => 'admin_sonata_classification_category_tree',  '_route' => 'admin_sonata_classification_category_tree',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/sonata/classification/tag')) {
                        // admin_sonata_classification_tag_list
                        if ($pathinfo === '/admin/sonata/classification/tag/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.classification.admin.tag',  '_sonata_name' => 'admin_sonata_classification_tag_list',  '_route' => 'admin_sonata_classification_tag_list',);
                        }

                        // admin_sonata_classification_tag_create
                        if ($pathinfo === '/admin/sonata/classification/tag/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.classification.admin.tag',  '_sonata_name' => 'admin_sonata_classification_tag_create',  '_route' => 'admin_sonata_classification_tag_create',);
                        }

                        // admin_sonata_classification_tag_batch
                        if ($pathinfo === '/admin/sonata/classification/tag/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.classification.admin.tag',  '_sonata_name' => 'admin_sonata_classification_tag_batch',  '_route' => 'admin_sonata_classification_tag_batch',);
                        }

                        // admin_sonata_classification_tag_edit
                        if (preg_match('#^/admin/sonata/classification/tag/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_classification_tag_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.classification.admin.tag',  '_sonata_name' => 'admin_sonata_classification_tag_edit',));
                        }

                        // admin_sonata_classification_tag_delete
                        if (preg_match('#^/admin/sonata/classification/tag/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_classification_tag_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.classification.admin.tag',  '_sonata_name' => 'admin_sonata_classification_tag_delete',));
                        }

                        // admin_sonata_classification_tag_show
                        if (preg_match('#^/admin/sonata/classification/tag/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_classification_tag_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.classification.admin.tag',  '_sonata_name' => 'admin_sonata_classification_tag_show',));
                        }

                        // admin_sonata_classification_tag_export
                        if ($pathinfo === '/admin/sonata/classification/tag/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.classification.admin.tag',  '_sonata_name' => 'admin_sonata_classification_tag_export',  '_route' => 'admin_sonata_classification_tag_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/sonata/classification/co')) {
                        if (0 === strpos($pathinfo, '/admin/sonata/classification/collection')) {
                            // admin_sonata_classification_collection_list
                            if ($pathinfo === '/admin/sonata/classification/collection/list') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.classification.admin.collection',  '_sonata_name' => 'admin_sonata_classification_collection_list',  '_route' => 'admin_sonata_classification_collection_list',);
                            }

                            // admin_sonata_classification_collection_create
                            if ($pathinfo === '/admin/sonata/classification/collection/create') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.classification.admin.collection',  '_sonata_name' => 'admin_sonata_classification_collection_create',  '_route' => 'admin_sonata_classification_collection_create',);
                            }

                            // admin_sonata_classification_collection_batch
                            if ($pathinfo === '/admin/sonata/classification/collection/batch') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.classification.admin.collection',  '_sonata_name' => 'admin_sonata_classification_collection_batch',  '_route' => 'admin_sonata_classification_collection_batch',);
                            }

                            // admin_sonata_classification_collection_edit
                            if (preg_match('#^/admin/sonata/classification/collection/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_classification_collection_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.classification.admin.collection',  '_sonata_name' => 'admin_sonata_classification_collection_edit',));
                            }

                            // admin_sonata_classification_collection_delete
                            if (preg_match('#^/admin/sonata/classification/collection/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_classification_collection_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.classification.admin.collection',  '_sonata_name' => 'admin_sonata_classification_collection_delete',));
                            }

                            // admin_sonata_classification_collection_show
                            if (preg_match('#^/admin/sonata/classification/collection/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_classification_collection_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.classification.admin.collection',  '_sonata_name' => 'admin_sonata_classification_collection_show',));
                            }

                            // admin_sonata_classification_collection_export
                            if ($pathinfo === '/admin/sonata/classification/collection/export') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.classification.admin.collection',  '_sonata_name' => 'admin_sonata_classification_collection_export',  '_route' => 'admin_sonata_classification_collection_export',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/admin/sonata/classification/context')) {
                            // admin_sonata_classification_context_list
                            if ($pathinfo === '/admin/sonata/classification/context/list') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.classification.admin.context',  '_sonata_name' => 'admin_sonata_classification_context_list',  '_route' => 'admin_sonata_classification_context_list',);
                            }

                            // admin_sonata_classification_context_create
                            if ($pathinfo === '/admin/sonata/classification/context/create') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.classification.admin.context',  '_sonata_name' => 'admin_sonata_classification_context_create',  '_route' => 'admin_sonata_classification_context_create',);
                            }

                            // admin_sonata_classification_context_batch
                            if ($pathinfo === '/admin/sonata/classification/context/batch') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.classification.admin.context',  '_sonata_name' => 'admin_sonata_classification_context_batch',  '_route' => 'admin_sonata_classification_context_batch',);
                            }

                            // admin_sonata_classification_context_edit
                            if (preg_match('#^/admin/sonata/classification/context/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_classification_context_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.classification.admin.context',  '_sonata_name' => 'admin_sonata_classification_context_edit',));
                            }

                            // admin_sonata_classification_context_delete
                            if (preg_match('#^/admin/sonata/classification/context/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_classification_context_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.classification.admin.context',  '_sonata_name' => 'admin_sonata_classification_context_delete',));
                            }

                            // admin_sonata_classification_context_show
                            if (preg_match('#^/admin/sonata/classification/context/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_classification_context_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.classification.admin.context',  '_sonata_name' => 'admin_sonata_classification_context_show',));
                            }

                            // admin_sonata_classification_context_export
                            if ($pathinfo === '/admin/sonata/classification/context/export') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.classification.admin.context',  '_sonata_name' => 'admin_sonata_classification_context_export',  '_route' => 'admin_sonata_classification_context_export',);
                            }

                        }

                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/projectcms')) {
                if (0 === strpos($pathinfo, '/admin/projectcms/mainpage')) {
                    // admin_projectcms_mainpage_list
                    if ($pathinfo === '/admin/projectcms/mainpage/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.mainpage',  '_sonata_name' => 'admin_projectcms_mainpage_list',  '_route' => 'admin_projectcms_mainpage_list',);
                    }

                    // admin_projectcms_mainpage_create
                    if ($pathinfo === '/admin/projectcms/mainpage/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.mainpage',  '_sonata_name' => 'admin_projectcms_mainpage_create',  '_route' => 'admin_projectcms_mainpage_create',);
                    }

                    // admin_projectcms_mainpage_batch
                    if ($pathinfo === '/admin/projectcms/mainpage/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.mainpage',  '_sonata_name' => 'admin_projectcms_mainpage_batch',  '_route' => 'admin_projectcms_mainpage_batch',);
                    }

                    // admin_projectcms_mainpage_edit
                    if (preg_match('#^/admin/projectcms/mainpage/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_projectcms_mainpage_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.mainpage',  '_sonata_name' => 'admin_projectcms_mainpage_edit',));
                    }

                    // admin_projectcms_mainpage_delete
                    if (preg_match('#^/admin/projectcms/mainpage/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_projectcms_mainpage_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.mainpage',  '_sonata_name' => 'admin_projectcms_mainpage_delete',));
                    }

                    // admin_projectcms_mainpage_show
                    if (preg_match('#^/admin/projectcms/mainpage/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_projectcms_mainpage_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.mainpage',  '_sonata_name' => 'admin_projectcms_mainpage_show',));
                    }

                    // admin_projectcms_mainpage_export
                    if ($pathinfo === '/admin/projectcms/mainpage/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.mainpage',  '_sonata_name' => 'admin_projectcms_mainpage_export',  '_route' => 'admin_projectcms_mainpage_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/projectcms/subpage')) {
                    // admin_projectcms_subpage_list
                    if ($pathinfo === '/admin/projectcms/subpage/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.subpage',  '_sonata_name' => 'admin_projectcms_subpage_list',  '_route' => 'admin_projectcms_subpage_list',);
                    }

                    // admin_projectcms_subpage_create
                    if ($pathinfo === '/admin/projectcms/subpage/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.subpage',  '_sonata_name' => 'admin_projectcms_subpage_create',  '_route' => 'admin_projectcms_subpage_create',);
                    }

                    // admin_projectcms_subpage_batch
                    if ($pathinfo === '/admin/projectcms/subpage/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.subpage',  '_sonata_name' => 'admin_projectcms_subpage_batch',  '_route' => 'admin_projectcms_subpage_batch',);
                    }

                    // admin_projectcms_subpage_edit
                    if (preg_match('#^/admin/projectcms/subpage/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_projectcms_subpage_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.subpage',  '_sonata_name' => 'admin_projectcms_subpage_edit',));
                    }

                    // admin_projectcms_subpage_delete
                    if (preg_match('#^/admin/projectcms/subpage/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_projectcms_subpage_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.subpage',  '_sonata_name' => 'admin_projectcms_subpage_delete',));
                    }

                    // admin_projectcms_subpage_show
                    if (preg_match('#^/admin/projectcms/subpage/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_projectcms_subpage_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.subpage',  '_sonata_name' => 'admin_projectcms_subpage_show',));
                    }

                    // admin_projectcms_subpage_export
                    if ($pathinfo === '/admin/projectcms/subpage/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.subpage',  '_sonata_name' => 'admin_projectcms_subpage_export',  '_route' => 'admin_projectcms_subpage_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/projectcms/machinepage')) {
                    // admin_projectcms_machinepage_list
                    if ($pathinfo === '/admin/projectcms/machinepage/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.machinepage',  '_sonata_name' => 'admin_projectcms_machinepage_list',  '_route' => 'admin_projectcms_machinepage_list',);
                    }

                    // admin_projectcms_machinepage_create
                    if ($pathinfo === '/admin/projectcms/machinepage/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.machinepage',  '_sonata_name' => 'admin_projectcms_machinepage_create',  '_route' => 'admin_projectcms_machinepage_create',);
                    }

                    // admin_projectcms_machinepage_batch
                    if ($pathinfo === '/admin/projectcms/machinepage/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.machinepage',  '_sonata_name' => 'admin_projectcms_machinepage_batch',  '_route' => 'admin_projectcms_machinepage_batch',);
                    }

                    // admin_projectcms_machinepage_edit
                    if (preg_match('#^/admin/projectcms/machinepage/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_projectcms_machinepage_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.machinepage',  '_sonata_name' => 'admin_projectcms_machinepage_edit',));
                    }

                    // admin_projectcms_machinepage_delete
                    if (preg_match('#^/admin/projectcms/machinepage/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_projectcms_machinepage_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.machinepage',  '_sonata_name' => 'admin_projectcms_machinepage_delete',));
                    }

                    // admin_projectcms_machinepage_show
                    if (preg_match('#^/admin/projectcms/machinepage/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_projectcms_machinepage_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.machinepage',  '_sonata_name' => 'admin_projectcms_machinepage_show',));
                    }

                    // admin_projectcms_machinepage_export
                    if ($pathinfo === '/admin/projectcms/machinepage/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.machinepage',  '_sonata_name' => 'admin_projectcms_machinepage_export',  '_route' => 'admin_projectcms_machinepage_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/projectcms/videospage')) {
                    // admin_projectcms_videospage_list
                    if ($pathinfo === '/admin/projectcms/videospage/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.videopage',  '_sonata_name' => 'admin_projectcms_videospage_list',  '_route' => 'admin_projectcms_videospage_list',);
                    }

                    // admin_projectcms_videospage_create
                    if ($pathinfo === '/admin/projectcms/videospage/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.videopage',  '_sonata_name' => 'admin_projectcms_videospage_create',  '_route' => 'admin_projectcms_videospage_create',);
                    }

                    // admin_projectcms_videospage_batch
                    if ($pathinfo === '/admin/projectcms/videospage/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.videopage',  '_sonata_name' => 'admin_projectcms_videospage_batch',  '_route' => 'admin_projectcms_videospage_batch',);
                    }

                    // admin_projectcms_videospage_edit
                    if (preg_match('#^/admin/projectcms/videospage/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_projectcms_videospage_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.videopage',  '_sonata_name' => 'admin_projectcms_videospage_edit',));
                    }

                    // admin_projectcms_videospage_delete
                    if (preg_match('#^/admin/projectcms/videospage/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_projectcms_videospage_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.videopage',  '_sonata_name' => 'admin_projectcms_videospage_delete',));
                    }

                    // admin_projectcms_videospage_show
                    if (preg_match('#^/admin/projectcms/videospage/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_projectcms_videospage_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.videopage',  '_sonata_name' => 'admin_projectcms_videospage_show',));
                    }

                    // admin_projectcms_videospage_export
                    if ($pathinfo === '/admin/projectcms/videospage/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.videopage',  '_sonata_name' => 'admin_projectcms_videospage_export',  '_route' => 'admin_projectcms_videospage_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/projectcms/partnerpage')) {
                    // admin_projectcms_partnerpage_list
                    if ($pathinfo === '/admin/projectcms/partnerpage/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.partnerpage',  '_sonata_name' => 'admin_projectcms_partnerpage_list',  '_route' => 'admin_projectcms_partnerpage_list',);
                    }

                    // admin_projectcms_partnerpage_create
                    if ($pathinfo === '/admin/projectcms/partnerpage/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.partnerpage',  '_sonata_name' => 'admin_projectcms_partnerpage_create',  '_route' => 'admin_projectcms_partnerpage_create',);
                    }

                    // admin_projectcms_partnerpage_batch
                    if ($pathinfo === '/admin/projectcms/partnerpage/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.partnerpage',  '_sonata_name' => 'admin_projectcms_partnerpage_batch',  '_route' => 'admin_projectcms_partnerpage_batch',);
                    }

                    // admin_projectcms_partnerpage_edit
                    if (preg_match('#^/admin/projectcms/partnerpage/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_projectcms_partnerpage_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.partnerpage',  '_sonata_name' => 'admin_projectcms_partnerpage_edit',));
                    }

                    // admin_projectcms_partnerpage_delete
                    if (preg_match('#^/admin/projectcms/partnerpage/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_projectcms_partnerpage_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.partnerpage',  '_sonata_name' => 'admin_projectcms_partnerpage_delete',));
                    }

                    // admin_projectcms_partnerpage_show
                    if (preg_match('#^/admin/projectcms/partnerpage/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_projectcms_partnerpage_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.partnerpage',  '_sonata_name' => 'admin_projectcms_partnerpage_show',));
                    }

                    // admin_projectcms_partnerpage_export
                    if ($pathinfo === '/admin/projectcms/partnerpage/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.partnerpage',  '_sonata_name' => 'admin_projectcms_partnerpage_export',  '_route' => 'admin_projectcms_partnerpage_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/projectcms/testimonialpage')) {
                    // admin_projectcms_testimonialpage_list
                    if ($pathinfo === '/admin/projectcms/testimonialpage/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.testimonial',  '_sonata_name' => 'admin_projectcms_testimonialpage_list',  '_route' => 'admin_projectcms_testimonialpage_list',);
                    }

                    // admin_projectcms_testimonialpage_create
                    if ($pathinfo === '/admin/projectcms/testimonialpage/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.testimonial',  '_sonata_name' => 'admin_projectcms_testimonialpage_create',  '_route' => 'admin_projectcms_testimonialpage_create',);
                    }

                    // admin_projectcms_testimonialpage_batch
                    if ($pathinfo === '/admin/projectcms/testimonialpage/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.testimonial',  '_sonata_name' => 'admin_projectcms_testimonialpage_batch',  '_route' => 'admin_projectcms_testimonialpage_batch',);
                    }

                    // admin_projectcms_testimonialpage_edit
                    if (preg_match('#^/admin/projectcms/testimonialpage/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_projectcms_testimonialpage_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.testimonial',  '_sonata_name' => 'admin_projectcms_testimonialpage_edit',));
                    }

                    // admin_projectcms_testimonialpage_delete
                    if (preg_match('#^/admin/projectcms/testimonialpage/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_projectcms_testimonialpage_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.testimonial',  '_sonata_name' => 'admin_projectcms_testimonialpage_delete',));
                    }

                    // admin_projectcms_testimonialpage_show
                    if (preg_match('#^/admin/projectcms/testimonialpage/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_projectcms_testimonialpage_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.testimonial',  '_sonata_name' => 'admin_projectcms_testimonialpage_show',));
                    }

                    // admin_projectcms_testimonialpage_export
                    if ($pathinfo === '/admin/projectcms/testimonialpage/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.testimonial',  '_sonata_name' => 'admin_projectcms_testimonialpage_export',  '_route' => 'admin_projectcms_testimonialpage_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/projectcms/gallerypage')) {
                    // admin_projectcms_gallerypage_list
                    if ($pathinfo === '/admin/projectcms/gallerypage/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.gallerypage',  '_sonata_name' => 'admin_projectcms_gallerypage_list',  '_route' => 'admin_projectcms_gallerypage_list',);
                    }

                    // admin_projectcms_gallerypage_create
                    if ($pathinfo === '/admin/projectcms/gallerypage/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.gallerypage',  '_sonata_name' => 'admin_projectcms_gallerypage_create',  '_route' => 'admin_projectcms_gallerypage_create',);
                    }

                    // admin_projectcms_gallerypage_batch
                    if ($pathinfo === '/admin/projectcms/gallerypage/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.gallerypage',  '_sonata_name' => 'admin_projectcms_gallerypage_batch',  '_route' => 'admin_projectcms_gallerypage_batch',);
                    }

                    // admin_projectcms_gallerypage_edit
                    if (preg_match('#^/admin/projectcms/gallerypage/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_projectcms_gallerypage_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.gallerypage',  '_sonata_name' => 'admin_projectcms_gallerypage_edit',));
                    }

                    // admin_projectcms_gallerypage_delete
                    if (preg_match('#^/admin/projectcms/gallerypage/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_projectcms_gallerypage_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.gallerypage',  '_sonata_name' => 'admin_projectcms_gallerypage_delete',));
                    }

                    // admin_projectcms_gallerypage_show
                    if (preg_match('#^/admin/projectcms/gallerypage/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_projectcms_gallerypage_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.gallerypage',  '_sonata_name' => 'admin_projectcms_gallerypage_show',));
                    }

                    // admin_projectcms_gallerypage_export
                    if ($pathinfo === '/admin/projectcms/gallerypage/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.gallerypage',  '_sonata_name' => 'admin_projectcms_gallerypage_export',  '_route' => 'admin_projectcms_gallerypage_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/projectcms/subthirdpage')) {
                    // admin_projectcms_subthirdpage_list
                    if ($pathinfo === '/admin/projectcms/subthirdpage/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.thirdlevelpage',  '_sonata_name' => 'admin_projectcms_subthirdpage_list',  '_route' => 'admin_projectcms_subthirdpage_list',);
                    }

                    // admin_projectcms_subthirdpage_create
                    if ($pathinfo === '/admin/projectcms/subthirdpage/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.thirdlevelpage',  '_sonata_name' => 'admin_projectcms_subthirdpage_create',  '_route' => 'admin_projectcms_subthirdpage_create',);
                    }

                    // admin_projectcms_subthirdpage_batch
                    if ($pathinfo === '/admin/projectcms/subthirdpage/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.thirdlevelpage',  '_sonata_name' => 'admin_projectcms_subthirdpage_batch',  '_route' => 'admin_projectcms_subthirdpage_batch',);
                    }

                    // admin_projectcms_subthirdpage_edit
                    if (preg_match('#^/admin/projectcms/subthirdpage/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_projectcms_subthirdpage_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.thirdlevelpage',  '_sonata_name' => 'admin_projectcms_subthirdpage_edit',));
                    }

                    // admin_projectcms_subthirdpage_delete
                    if (preg_match('#^/admin/projectcms/subthirdpage/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_projectcms_subthirdpage_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.thirdlevelpage',  '_sonata_name' => 'admin_projectcms_subthirdpage_delete',));
                    }

                    // admin_projectcms_subthirdpage_show
                    if (preg_match('#^/admin/projectcms/subthirdpage/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_projectcms_subthirdpage_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.thirdlevelpage',  '_sonata_name' => 'admin_projectcms_subthirdpage_show',));
                    }

                    // admin_projectcms_subthirdpage_export
                    if ($pathinfo === '/admin/projectcms/subthirdpage/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.thirdlevelpage',  '_sonata_name' => 'admin_projectcms_subthirdpage_export',  '_route' => 'admin_projectcms_subthirdpage_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/projectcms/product')) {
                    if (0 === strpos($pathinfo, '/admin/projectcms/productsubpage')) {
                        // admin_projectcms_productsubpage_list
                        if ($pathinfo === '/admin/projectcms/productsubpage/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.subproductcat',  '_sonata_name' => 'admin_projectcms_productsubpage_list',  '_route' => 'admin_projectcms_productsubpage_list',);
                        }

                        // admin_projectcms_productsubpage_create
                        if ($pathinfo === '/admin/projectcms/productsubpage/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.subproductcat',  '_sonata_name' => 'admin_projectcms_productsubpage_create',  '_route' => 'admin_projectcms_productsubpage_create',);
                        }

                        // admin_projectcms_productsubpage_batch
                        if ($pathinfo === '/admin/projectcms/productsubpage/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.subproductcat',  '_sonata_name' => 'admin_projectcms_productsubpage_batch',  '_route' => 'admin_projectcms_productsubpage_batch',);
                        }

                        // admin_projectcms_productsubpage_edit
                        if (preg_match('#^/admin/projectcms/productsubpage/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_projectcms_productsubpage_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.subproductcat',  '_sonata_name' => 'admin_projectcms_productsubpage_edit',));
                        }

                        // admin_projectcms_productsubpage_delete
                        if (preg_match('#^/admin/projectcms/productsubpage/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_projectcms_productsubpage_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.subproductcat',  '_sonata_name' => 'admin_projectcms_productsubpage_delete',));
                        }

                        // admin_projectcms_productsubpage_show
                        if (preg_match('#^/admin/projectcms/productsubpage/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_projectcms_productsubpage_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.subproductcat',  '_sonata_name' => 'admin_projectcms_productsubpage_show',));
                        }

                        // admin_projectcms_productsubpage_export
                        if ($pathinfo === '/admin/projectcms/productsubpage/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.subproductcat',  '_sonata_name' => 'admin_projectcms_productsubpage_export',  '_route' => 'admin_projectcms_productsubpage_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/projectcms/productmainpage')) {
                        // admin_projectcms_productmainpage_list
                        if ($pathinfo === '/admin/projectcms/productmainpage/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.productcat',  '_sonata_name' => 'admin_projectcms_productmainpage_list',  '_route' => 'admin_projectcms_productmainpage_list',);
                        }

                        // admin_projectcms_productmainpage_create
                        if ($pathinfo === '/admin/projectcms/productmainpage/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.productcat',  '_sonata_name' => 'admin_projectcms_productmainpage_create',  '_route' => 'admin_projectcms_productmainpage_create',);
                        }

                        // admin_projectcms_productmainpage_batch
                        if ($pathinfo === '/admin/projectcms/productmainpage/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.productcat',  '_sonata_name' => 'admin_projectcms_productmainpage_batch',  '_route' => 'admin_projectcms_productmainpage_batch',);
                        }

                        // admin_projectcms_productmainpage_edit
                        if (preg_match('#^/admin/projectcms/productmainpage/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_projectcms_productmainpage_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.productcat',  '_sonata_name' => 'admin_projectcms_productmainpage_edit',));
                        }

                        // admin_projectcms_productmainpage_delete
                        if (preg_match('#^/admin/projectcms/productmainpage/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_projectcms_productmainpage_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.productcat',  '_sonata_name' => 'admin_projectcms_productmainpage_delete',));
                        }

                        // admin_projectcms_productmainpage_show
                        if (preg_match('#^/admin/projectcms/productmainpage/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_projectcms_productmainpage_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.productcat',  '_sonata_name' => 'admin_projectcms_productmainpage_show',));
                        }

                        // admin_projectcms_productmainpage_export
                        if ($pathinfo === '/admin/projectcms/productmainpage/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.productcat',  '_sonata_name' => 'admin_projectcms_productmainpage_export',  '_route' => 'admin_projectcms_productmainpage_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/projectcms/productpage')) {
                        // admin_projectcms_productpage_list
                        if ($pathinfo === '/admin/projectcms/productpage/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.products',  '_sonata_name' => 'admin_projectcms_productpage_list',  '_route' => 'admin_projectcms_productpage_list',);
                        }

                        // admin_projectcms_productpage_create
                        if ($pathinfo === '/admin/projectcms/productpage/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.products',  '_sonata_name' => 'admin_projectcms_productpage_create',  '_route' => 'admin_projectcms_productpage_create',);
                        }

                        // admin_projectcms_productpage_batch
                        if ($pathinfo === '/admin/projectcms/productpage/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.products',  '_sonata_name' => 'admin_projectcms_productpage_batch',  '_route' => 'admin_projectcms_productpage_batch',);
                        }

                        // admin_projectcms_productpage_edit
                        if (preg_match('#^/admin/projectcms/productpage/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_projectcms_productpage_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.products',  '_sonata_name' => 'admin_projectcms_productpage_edit',));
                        }

                        // admin_projectcms_productpage_delete
                        if (preg_match('#^/admin/projectcms/productpage/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_projectcms_productpage_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.products',  '_sonata_name' => 'admin_projectcms_productpage_delete',));
                        }

                        // admin_projectcms_productpage_show
                        if (preg_match('#^/admin/projectcms/productpage/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_projectcms_productpage_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.products',  '_sonata_name' => 'admin_projectcms_productpage_show',));
                        }

                        // admin_projectcms_productpage_export
                        if ($pathinfo === '/admin/projectcms/productpage/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.products',  '_sonata_name' => 'admin_projectcms_productpage_export',  '_route' => 'admin_projectcms_productpage_export',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/projectcms/homepage')) {
                    // admin_projectcms_homepage_list
                    if ($pathinfo === '/admin/projectcms/homepage/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.homepage',  '_sonata_name' => 'admin_projectcms_homepage_list',  '_route' => 'admin_projectcms_homepage_list',);
                    }

                    // admin_projectcms_homepage_create
                    if ($pathinfo === '/admin/projectcms/homepage/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.homepage',  '_sonata_name' => 'admin_projectcms_homepage_create',  '_route' => 'admin_projectcms_homepage_create',);
                    }

                    // admin_projectcms_homepage_batch
                    if ($pathinfo === '/admin/projectcms/homepage/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.homepage',  '_sonata_name' => 'admin_projectcms_homepage_batch',  '_route' => 'admin_projectcms_homepage_batch',);
                    }

                    // admin_projectcms_homepage_edit
                    if (preg_match('#^/admin/projectcms/homepage/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_projectcms_homepage_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.homepage',  '_sonata_name' => 'admin_projectcms_homepage_edit',));
                    }

                    // admin_projectcms_homepage_delete
                    if (preg_match('#^/admin/projectcms/homepage/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_projectcms_homepage_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.homepage',  '_sonata_name' => 'admin_projectcms_homepage_delete',));
                    }

                    // admin_projectcms_homepage_show
                    if (preg_match('#^/admin/projectcms/homepage/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_projectcms_homepage_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.homepage',  '_sonata_name' => 'admin_projectcms_homepage_show',));
                    }

                    // admin_projectcms_homepage_export
                    if ($pathinfo === '/admin/projectcms/homepage/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.homepage',  '_sonata_name' => 'admin_projectcms_homepage_export',  '_route' => 'admin_projectcms_homepage_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/projectcms/project')) {
                    if (0 === strpos($pathinfo, '/admin/projectcms/projectmainpage')) {
                        // admin_projectcms_projectmainpage_list
                        if ($pathinfo === '/admin/projectcms/projectmainpage/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.project',  '_sonata_name' => 'admin_projectcms_projectmainpage_list',  '_route' => 'admin_projectcms_projectmainpage_list',);
                        }

                        // admin_projectcms_projectmainpage_create
                        if ($pathinfo === '/admin/projectcms/projectmainpage/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.project',  '_sonata_name' => 'admin_projectcms_projectmainpage_create',  '_route' => 'admin_projectcms_projectmainpage_create',);
                        }

                        // admin_projectcms_projectmainpage_batch
                        if ($pathinfo === '/admin/projectcms/projectmainpage/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.project',  '_sonata_name' => 'admin_projectcms_projectmainpage_batch',  '_route' => 'admin_projectcms_projectmainpage_batch',);
                        }

                        // admin_projectcms_projectmainpage_edit
                        if (preg_match('#^/admin/projectcms/projectmainpage/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_projectcms_projectmainpage_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.project',  '_sonata_name' => 'admin_projectcms_projectmainpage_edit',));
                        }

                        // admin_projectcms_projectmainpage_delete
                        if (preg_match('#^/admin/projectcms/projectmainpage/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_projectcms_projectmainpage_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.project',  '_sonata_name' => 'admin_projectcms_projectmainpage_delete',));
                        }

                        // admin_projectcms_projectmainpage_show
                        if (preg_match('#^/admin/projectcms/projectmainpage/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_projectcms_projectmainpage_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.project',  '_sonata_name' => 'admin_projectcms_projectmainpage_show',));
                        }

                        // admin_projectcms_projectmainpage_export
                        if ($pathinfo === '/admin/projectcms/projectmainpage/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.project',  '_sonata_name' => 'admin_projectcms_projectmainpage_export',  '_route' => 'admin_projectcms_projectmainpage_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/projectcms/projectpage')) {
                        // admin_projectcms_projectpage_list
                        if ($pathinfo === '/admin/projectcms/projectpage/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.projectlist',  '_sonata_name' => 'admin_projectcms_projectpage_list',  '_route' => 'admin_projectcms_projectpage_list',);
                        }

                        // admin_projectcms_projectpage_create
                        if ($pathinfo === '/admin/projectcms/projectpage/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.projectlist',  '_sonata_name' => 'admin_projectcms_projectpage_create',  '_route' => 'admin_projectcms_projectpage_create',);
                        }

                        // admin_projectcms_projectpage_batch
                        if ($pathinfo === '/admin/projectcms/projectpage/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.projectlist',  '_sonata_name' => 'admin_projectcms_projectpage_batch',  '_route' => 'admin_projectcms_projectpage_batch',);
                        }

                        // admin_projectcms_projectpage_edit
                        if (preg_match('#^/admin/projectcms/projectpage/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_projectcms_projectpage_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.projectlist',  '_sonata_name' => 'admin_projectcms_projectpage_edit',));
                        }

                        // admin_projectcms_projectpage_delete
                        if (preg_match('#^/admin/projectcms/projectpage/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_projectcms_projectpage_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.projectlist',  '_sonata_name' => 'admin_projectcms_projectpage_delete',));
                        }

                        // admin_projectcms_projectpage_show
                        if (preg_match('#^/admin/projectcms/projectpage/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_projectcms_projectpage_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.projectlist',  '_sonata_name' => 'admin_projectcms_projectpage_show',));
                        }

                        // admin_projectcms_projectpage_export
                        if ($pathinfo === '/admin/projectcms/projectpage/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.projectlist',  '_sonata_name' => 'admin_projectcms_projectpage_export',  '_route' => 'admin_projectcms_projectpage_export',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/projectcms/blogpage')) {
                    // admin_projectcms_blogpage_list
                    if ($pathinfo === '/admin/projectcms/blogpage/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.blogs',  '_sonata_name' => 'admin_projectcms_blogpage_list',  '_route' => 'admin_projectcms_blogpage_list',);
                    }

                    // admin_projectcms_blogpage_create
                    if ($pathinfo === '/admin/projectcms/blogpage/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.blogs',  '_sonata_name' => 'admin_projectcms_blogpage_create',  '_route' => 'admin_projectcms_blogpage_create',);
                    }

                    // admin_projectcms_blogpage_batch
                    if ($pathinfo === '/admin/projectcms/blogpage/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.blogs',  '_sonata_name' => 'admin_projectcms_blogpage_batch',  '_route' => 'admin_projectcms_blogpage_batch',);
                    }

                    // admin_projectcms_blogpage_edit
                    if (preg_match('#^/admin/projectcms/blogpage/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_projectcms_blogpage_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.blogs',  '_sonata_name' => 'admin_projectcms_blogpage_edit',));
                    }

                    // admin_projectcms_blogpage_delete
                    if (preg_match('#^/admin/projectcms/blogpage/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_projectcms_blogpage_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.blogs',  '_sonata_name' => 'admin_projectcms_blogpage_delete',));
                    }

                    // admin_projectcms_blogpage_show
                    if (preg_match('#^/admin/projectcms/blogpage/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_projectcms_blogpage_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.blogs',  '_sonata_name' => 'admin_projectcms_blogpage_show',));
                    }

                    // admin_projectcms_blogpage_export
                    if ($pathinfo === '/admin/projectcms/blogpage/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.blogs',  '_sonata_name' => 'admin_projectcms_blogpage_export',  '_route' => 'admin_projectcms_blogpage_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/projectcms/enquirypage')) {
                    // admin_projectcms_enquirypage_list
                    if ($pathinfo === '/admin/projectcms/enquirypage/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.enquiry',  '_sonata_name' => 'admin_projectcms_enquirypage_list',  '_route' => 'admin_projectcms_enquirypage_list',);
                    }

                    // admin_projectcms_enquirypage_create
                    if ($pathinfo === '/admin/projectcms/enquirypage/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.enquiry',  '_sonata_name' => 'admin_projectcms_enquirypage_create',  '_route' => 'admin_projectcms_enquirypage_create',);
                    }

                    // admin_projectcms_enquirypage_batch
                    if ($pathinfo === '/admin/projectcms/enquirypage/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.enquiry',  '_sonata_name' => 'admin_projectcms_enquirypage_batch',  '_route' => 'admin_projectcms_enquirypage_batch',);
                    }

                    // admin_projectcms_enquirypage_edit
                    if (preg_match('#^/admin/projectcms/enquirypage/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_projectcms_enquirypage_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.enquiry',  '_sonata_name' => 'admin_projectcms_enquirypage_edit',));
                    }

                    // admin_projectcms_enquirypage_delete
                    if (preg_match('#^/admin/projectcms/enquirypage/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_projectcms_enquirypage_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.enquiry',  '_sonata_name' => 'admin_projectcms_enquirypage_delete',));
                    }

                    // admin_projectcms_enquirypage_show
                    if (preg_match('#^/admin/projectcms/enquirypage/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_projectcms_enquirypage_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.enquiry',  '_sonata_name' => 'admin_projectcms_enquirypage_show',));
                    }

                    // admin_projectcms_enquirypage_export
                    if ($pathinfo === '/admin/projectcms/enquirypage/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.enquiry',  '_sonata_name' => 'admin_projectcms_enquirypage_export',  '_route' => 'admin_projectcms_enquirypage_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/projectcms/msfabricationpage')) {
                    // admin_projectcms_msfabricationpage_list
                    if ($pathinfo === '/admin/projectcms/msfabricationpage/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.fabrication',  '_sonata_name' => 'admin_projectcms_msfabricationpage_list',  '_route' => 'admin_projectcms_msfabricationpage_list',);
                    }

                    // admin_projectcms_msfabricationpage_create
                    if ($pathinfo === '/admin/projectcms/msfabricationpage/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.fabrication',  '_sonata_name' => 'admin_projectcms_msfabricationpage_create',  '_route' => 'admin_projectcms_msfabricationpage_create',);
                    }

                    // admin_projectcms_msfabricationpage_batch
                    if ($pathinfo === '/admin/projectcms/msfabricationpage/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.fabrication',  '_sonata_name' => 'admin_projectcms_msfabricationpage_batch',  '_route' => 'admin_projectcms_msfabricationpage_batch',);
                    }

                    // admin_projectcms_msfabricationpage_edit
                    if (preg_match('#^/admin/projectcms/msfabricationpage/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_projectcms_msfabricationpage_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.fabrication',  '_sonata_name' => 'admin_projectcms_msfabricationpage_edit',));
                    }

                    // admin_projectcms_msfabricationpage_delete
                    if (preg_match('#^/admin/projectcms/msfabricationpage/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_projectcms_msfabricationpage_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.fabrication',  '_sonata_name' => 'admin_projectcms_msfabricationpage_delete',));
                    }

                    // admin_projectcms_msfabricationpage_show
                    if (preg_match('#^/admin/projectcms/msfabricationpage/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_projectcms_msfabricationpage_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.fabrication',  '_sonata_name' => 'admin_projectcms_msfabricationpage_show',));
                    }

                    // admin_projectcms_msfabricationpage_export
                    if ($pathinfo === '/admin/projectcms/msfabricationpage/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.fabrication',  '_sonata_name' => 'admin_projectcms_msfabricationpage_export',  '_route' => 'admin_projectcms_msfabricationpage_export',);
                    }

                    if (0 === strpos($pathinfo, '/admin/projectcms/msfabricationpagedetail')) {
                        // admin_projectcms_msfabricationpagedetail_list
                        if ($pathinfo === '/admin/projectcms/msfabricationpagedetail/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.fabricationdetail',  '_sonata_name' => 'admin_projectcms_msfabricationpagedetail_list',  '_route' => 'admin_projectcms_msfabricationpagedetail_list',);
                        }

                        // admin_projectcms_msfabricationpagedetail_create
                        if ($pathinfo === '/admin/projectcms/msfabricationpagedetail/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.fabricationdetail',  '_sonata_name' => 'admin_projectcms_msfabricationpagedetail_create',  '_route' => 'admin_projectcms_msfabricationpagedetail_create',);
                        }

                        // admin_projectcms_msfabricationpagedetail_batch
                        if ($pathinfo === '/admin/projectcms/msfabricationpagedetail/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.fabricationdetail',  '_sonata_name' => 'admin_projectcms_msfabricationpagedetail_batch',  '_route' => 'admin_projectcms_msfabricationpagedetail_batch',);
                        }

                        // admin_projectcms_msfabricationpagedetail_edit
                        if (preg_match('#^/admin/projectcms/msfabricationpagedetail/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_projectcms_msfabricationpagedetail_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.fabricationdetail',  '_sonata_name' => 'admin_projectcms_msfabricationpagedetail_edit',));
                        }

                        // admin_projectcms_msfabricationpagedetail_delete
                        if (preg_match('#^/admin/projectcms/msfabricationpagedetail/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_projectcms_msfabricationpagedetail_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.fabricationdetail',  '_sonata_name' => 'admin_projectcms_msfabricationpagedetail_delete',));
                        }

                        // admin_projectcms_msfabricationpagedetail_show
                        if (preg_match('#^/admin/projectcms/msfabricationpagedetail/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_projectcms_msfabricationpagedetail_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.fabricationdetail',  '_sonata_name' => 'admin_projectcms_msfabricationpagedetail_show',));
                        }

                        // admin_projectcms_msfabricationpagedetail_export
                        if ($pathinfo === '/admin/projectcms/msfabricationpagedetail/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.fabricationdetail',  '_sonata_name' => 'admin_projectcms_msfabricationpagedetail_export',  '_route' => 'admin_projectcms_msfabricationpagedetail_export',);
                        }

                    }

                }

            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array('_route' => 'homepage');
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
