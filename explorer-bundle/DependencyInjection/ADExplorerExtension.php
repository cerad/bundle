<?php
declare(strict_types=1);

namespace AD\ExplorerBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class ADExplorerExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        // ... you'll load the files here later
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yaml');
    }
}