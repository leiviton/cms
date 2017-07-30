<?php
/**
 * Created by PhpStorm.
 * User: leiviton00
 * Date: 27/07/2017
 * Time: 12:54
 */

namespace CMS\Plugins;


use Interop\Container\ContainerInterface;
use CMS\ServiceContainerInterface;


class ViewPlugin implements PluginInterface
{
    public function register(ServiceContainerInterface $container)
    {
        $container->addLazy(
            'twig', function (ContainerInterface $container) {
            $loader = new \Twig_Loader_Filesystem(__DIR__ . '/../../templates');
            $twig = new \Twig_Environment($loader);
            return $twig;
        });

        $container->addLazy('view.renderer', function (ContainerInterface $container) {
            $twigEnviroment = $container->get('twig');
            return new ViewRenderer($twigEnviroment);
        });
    }

}