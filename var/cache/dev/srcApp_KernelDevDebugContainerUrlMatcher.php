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
            '/deportes/eliminar' => [[['_route' => 'eliminarNoticia', '_controller' => 'App\\Controller\\DeportesController::eliminarBd'], null, null, null, false, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/deportes(?'
                        .'|(?:/([^/]++)(?:/(\\d+))?)?(*:44)'
                        .'|/(?'
                            .'|actualizar(*:65)'
                            .'|cargarbd(*:80)'
                            .'|usuario(?'
                                .'|(*:97)'
                                .'|/([^/]++)(*:113)'
                            .')'
                            .'|(es|en)/([\\d+]{8})/([^/]++)/([^/]++)(?'
                                .'|(?:/([^/\\.]++)(?:\\.(html|json|xml))?)?(*:199)'
                                .'|(?:/(\\d+))?(*:218)'
                            .')'
                            .'|([^/]++)(?'
                                .'|/([^/]++)(*:247)'
                                .'|(*:255)'
                            .')'
                        .')'
                        .'|(*:265)'
                    .')'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            44 => [[['_route' => 'lista_paginas', 'seccion' => 'tenis', 'pagina' => 1, '_controller' => 'App\\Controller\\DeportesController::lista'], ['seccion', 'pagina'], null, null, false, true, null]],
            65 => [[['_route' => 'actualizarNoticia', '_controller' => 'App\\Controller\\DeportesController::actualizarBd'], [], null, null, false, false, null]],
            80 => [[['_route' => 'noticia', '_controller' => 'App\\Controller\\DeportesController::cargarBd'], [], null, null, false, false, null]],
            97 => [[['_route' => 'usuario', '_controller' => 'App\\Controller\\DeportesController::sesionUsuario'], [], null, null, false, false, null]],
            113 => [[['_route' => 'usuario_session', '_controller' => 'App\\Controller\\DeportesController::paginaUsuario'], ['nombre'], null, null, false, true, null]],
            199 => [[['_route' => 'app_deportes_rutaavanzada', 'slug' => '1', '_format' => 'html', '_controller' => 'App\\Controller\\DeportesController::rutaAvanzada'], ['_locale', 'fecha', 'seccion', 'equipo', 'slug', '_format'], null, null, false, true, null]],
            218 => [[['_route' => 'app_deportes_rutaavanzadalistado', 'slug' => '1', '_format' => 'html', 'pagina' => '1', '_controller' => 'App\\Controller\\DeportesController::rutaAvanzadaListado'], ['_locale', 'fecha', 'seccion', 'equipo', 'pagina'], null, null, false, true, null]],
            247 => [[['_route' => 'app_deportes_noticia', 'seccion' => 'tenis', '_controller' => 'App\\Controller\\DeportesController::noticia'], ['seccion', 'slug'], null, null, false, true, null]],
            255 => [[['_route' => 'app_deportes_mostrar', '_controller' => 'App\\Controller\\DeportesController::mostrar'], ['slug'], null, null, false, true, null]],
            265 => [[['_route' => 'app_deportes_inicio', '_controller' => 'App\\Controller\\DeportesController::inicio'], [], null, null, false, false, null]],
        ];
    }
}
