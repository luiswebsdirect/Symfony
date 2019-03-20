<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = [
        'app_deportes_inicio' => [[], ['_controller' => 'App\\Controller\\DeportesController::inicio'], [], [['text', '/deportes']], [], []],
        'eliminarNoticia' => [[], ['_controller' => 'App\\Controller\\DeportesController::eliminarBd'], [], [['text', '/deportes/eliminar']], [], []],
        'lista_paginas' => [['seccion', 'pagina'], ['seccion' => 'tenis', 'pagina' => 1, '_controller' => 'App\\Controller\\DeportesController::lista'], ['pagina' => '\\d+'], [['variable', '/', '\\d+', 'pagina', true], ['variable', '/', '[^/]++', 'seccion', true], ['text', '/deportes']], [], []],
        'verNoticia' => [['seccion', 'titular'], ['seccion' => 'tenis', '_controller' => 'App\\Controller\\DeportesController::noticia'], [], [['variable', '/', '[^/]++', 'titular', true], ['variable', '/', '[^/]++', 'seccion', true], ['text', '/deportes']], [], []],
        'actualizarNoticia' => [[], ['_controller' => 'App\\Controller\\DeportesController::actualizarBd'], [], [['text', '/deportes/actualizar']], [], []],
        'noticia' => [[], ['_controller' => 'App\\Controller\\DeportesController::cargarBd'], [], [['text', '/deportes/cargarbd']], [], []],
        'usuario' => [[], ['_controller' => 'App\\Controller\\DeportesController::sesionUsuario'], [], [['text', '/deportes/usuario']], [], []],
        'usuario_session' => [['nombre'], ['_controller' => 'App\\Controller\\DeportesController::paginaUsuario'], [], [['variable', '/', '[^/]++', 'nombre', true], ['text', '/deportes/usuario']], [], []],
        'app_deportes_rutaavanzada' => [['_locale', 'fecha', 'seccion', 'equipo', 'slug', '_format'], ['slug' => '1', '_format' => 'html', '_controller' => 'App\\Controller\\DeportesController::rutaAvanzada'], ['_locale' => 'es|en', '_format' => 'html|json|xml', 'fecha' => '[\\d+]{8}'], [['variable', '.', 'html|json|xml', '_format', true], ['variable', '/', '[^/\\.]++', 'slug', true], ['variable', '/', '[^/]++', 'equipo', true], ['variable', '/', '[^/]++', 'seccion', true], ['variable', '/', '[\\d+]{8}', 'fecha', true], ['variable', '/', 'es|en', '_locale', true], ['text', '/deportes']], [], []],
        'app_deportes_rutaavanzadalistado' => [['_locale', 'fecha', 'seccion', 'equipo', 'pagina'], ['slug' => '1', '_format' => 'html', 'pagina' => '1', '_controller' => 'App\\Controller\\DeportesController::rutaAvanzadaListado'], ['_locale' => 'es|en', '_format' => 'html|json|xml', 'fecha' => '[\\d+]{8}', 'pagina' => '\\d+'], [['variable', '/', '\\d+', 'pagina', true], ['variable', '/', '[^/]++', 'equipo', true], ['variable', '/', '[^/]++', 'seccion', true], ['variable', '/', '[\\d+]{8}', 'fecha', true], ['variable', '/', 'es|en', '_locale', true], ['text', '/deportes']], [], []],
        'app_deportes_mostrar' => [['slug'], ['_controller' => 'App\\Controller\\DeportesController::mostrar'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/deportes']], [], []],
        '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
        '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
        '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
        '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
        '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
        '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
        '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
        '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception::showAction'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception::cssAction'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    ];
        }
    }

    public function generate($name, $parameters = [], $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && null !== $name) {
            do {
                if ((self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
                    unset($parameters['_locale']);
                    $name .= '.'.$locale;
                    break;
                }
            } while (false !== $locale = strstr($locale, '_', true));
        }

        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
