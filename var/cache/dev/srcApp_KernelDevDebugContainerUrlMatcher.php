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
        ];
    }
}
