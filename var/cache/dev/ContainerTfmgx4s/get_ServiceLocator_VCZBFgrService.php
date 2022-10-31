<?php

namespace ContainerTfmgx4s;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VCZBFgrService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.VCZBFgr' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.VCZBFgr'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'managerRegistry' => ['services', 'doctrine', 'getDoctrineService', false],
            'slugger' => ['privates', 'slugger', 'getSluggerService', true],
        ], [
            'managerRegistry' => '?',
            'slugger' => '?',
        ]);
    }
}
