<?php
/**
 * Created by PhpStorm.
 * User: leiviton00
 * Date: 26/07/2017
 * Time: 20:51
 */

namespace CMS\Plugins;


use CMS\ServiceContainerInterface;

interface PluginInterface
{
    public function register(ServiceContainerInterface $container);
}