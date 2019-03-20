<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = [
            '/deportes' => [[['_route' => 'app_deportes_inicio', '_controller' => 'App\\Controller\\DeportesController::inicio'], null, null, null, false, false, null]],
            '/deportes/eliminar' => [[['_route' => 'eliminarNoticia', '_controller' => 'App\\Controller\\DeportesController::eliminarBd'], null, null, null, false, false, null]],
            '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
            '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
            '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
            '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
            '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/deportes(?'
                        .'|(?:/([^/]++)(?:/(\\d+))?)?(*:44)'
                        .'|/(?'
                            .'|([^/]++)/([^/]++)(*:72)'
                            .'|actualizar(*:89)'
                            .'|cargarbd(*:104)'
                            .'|usuario(?'
                                .'|(*:122)'
                                .'|/([^/]++)(*:139)'
                            .')'
                            .'|(es|en)/([\\d+]{8})/([^/]++)/([^/]++)(?'
                                .'|(?:/([^/\\.]++)(?:\\.(html|json|xml))?)?(*:225)'
                                .'|(?:/(\\d+))?(*:244)'
                            .')'
                            .'|([^/]++)(*:261)'
                        .')'
                    .')'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:302)'
                        .'|wdt/([^/]++)(*:322)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:368)'
                                .'|router(*:382)'
                                .'|exception(?'
                                    .'|(*:402)'
                                    .'|\\.css(*:415)'
                                .')'
                            .')'
                            .'|(*:425)'
                        .')'
                    .')'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            44 => [[['_route' => 'lista_paginas', 'seccion' => 'tenis', 'pagina' => 1, '_controller' => 'App\\Controller\\DeportesController::lista'], ['seccion', 'pagina'], null, null, false, true, null]],
            72 => [[['_route' => 'verNoticia', 'seccion' => 'tenis', '_controller' => 'App\\Controller\\DeportesController::noticia'], ['seccion', 'titular'], null, null, false, true, null]],
            89 => [[['_route' => 'actualizarNoticia', '_controller' => 'App\\Controller\\DeportesController::actualizarBd'], [], null, null, false, false, null]],
            104 => [[['_route' => 'noticia', '_controller' => 'App\\Controller\\DeportesController::cargarBd'], [], null, null, false, false, null]],
            122 => [[['_route' => 'usuario', '_controller' => 'App\\Controller\\DeportesController::sesionUsuario'], [], null, null, false, false, null]],
            139 => [[['_route' => 'usuario_session', '_controller' => 'App\\Controller\\DeportesController::paginaUsuario'], ['nombre'], null, null, false, true, null]],
            225 => [[['_route' => 'app_deportes_rutaavanzada', 'slug' => '1', '_format' => 'html', '_controller' => 'App\\Controller\\DeportesController::rutaAvanzada'], ['_locale', 'fecha', 'seccion', 'equipo', 'slug', '_format'], null, null, false, true, null]],
            244 => [[['_route' => 'app_deportes_rutaavanzadalistado', 'slug' => '1', '_format' => 'html', 'pagina' => '1', '_controller' => 'App\\Controller\\DeportesController::rutaAvanzadaListado'], ['_locale', 'fecha', 'seccion', 'equipo', 'pagina'], null, null, false, true, null]],
            261 => [[['_route' => 'app_deportes_mostrar', '_controller' => 'App\\Controller\\DeportesController::mostrar'], ['slug'], null, null, false, true, null]],
            302 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
            322 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
            368 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
            382 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
            402 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
            415 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
            425 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        ];
    }
}
