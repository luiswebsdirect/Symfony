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
            '/deportes/usuario' => [[['_route' => 'usuario', '_controller' => 'App\\Controller\\DeportesController::sesionUsuario'], null, null, null, false, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/deportes(?'
                        .'|/(?'
                            .'|usuario/([^/]++)(*:39)'
                            .'|(es|en)/([\\d+]{8})/([^/]++)/([^/]++)(?'
                                .'|(?:/([^/\\.]++)(?:\\.(html|json|xml))?)?(*:123)'
                                .'|(?:/(\\d+))?(*:142)'
                            .')'
                        .')'
                        .'|(?:/([^/]++)(?:/(\\d+))?)?(*:177)'
                        .'|/([^/]++)(?'
                            .'|/([^/]++)(*:206)'
                            .'|(*:214)'
                        .')'
                        .'|(*:223)'
                    .')'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            39 => [[['_route' => 'usuario_session', '_controller' => 'App\\Controller\\DeportesController::paginaUsuario'], ['nombre'], null, null, false, true, null]],
            123 => [[['_route' => 'app_deportes_rutaavanzada', 'slug' => '1', '_format' => 'html', '_controller' => 'App\\Controller\\DeportesController::rutaAvanzada'], ['_locale', 'fecha', 'seccion', 'equipo', 'slug', '_format'], null, null, false, true, null]],
            142 => [[['_route' => 'app_deportes_rutaavanzadalistado', 'slug' => '1', '_format' => 'html', 'pagina' => '1', '_controller' => 'App\\Controller\\DeportesController::rutaAvanzadaListado'], ['_locale', 'fecha', 'seccion', 'equipo', 'pagina'], null, null, false, true, null]],
            177 => [[['_route' => 'lista_paginas', 'seccion' => 'tenis', 'pagina' => 1, '_controller' => 'App\\Controller\\DeportesController::lista'], ['seccion', 'pagina'], null, null, false, true, null]],
            206 => [[['_route' => 'app_deportes_noticia', 'seccion' => 'tenis', '_controller' => 'App\\Controller\\DeportesController::noticia'], ['seccion', 'slug'], null, null, false, true, null]],
            214 => [[['_route' => 'app_deportes_mostrar', '_controller' => 'App\\Controller\\DeportesController::mostrar'], ['slug'], null, null, false, true, null]],
            223 => [[['_route' => 'app_deportes_inicio', '_controller' => 'App\\Controller\\DeportesController::inicio'], [], null, null, false, false, null]],
        ];
    }
}
