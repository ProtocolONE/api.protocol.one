<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\Routing\RouteCollectionBuilder;
use Doctrine\Common\Annotations\AnnotationRegistry;

$loader = require __DIR__ . '/../vendor/autoload.php';

ini_set('xdebug.max_nesting_level', 500);

AnnotationRegistry::registerLoader([$loader, 'loadClass']);

/**
 * Class AppKernel
 *
 * @category GSG
 * @copyright Copyright (с) 2018, Syncopate Limited and/or affiliates. All rights reserved.
 * @author Vadim Sabirov <vadim.sabirov@project.one>
 * @version 1.0
 */
class AppKernel extends Kernel
{
    use MicroKernelTrait;

    public function registerBundles()
    {
        $bundles = [
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Doctrine\Bundle\MongoDBBundle\DoctrineMongoDBBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new Lexik\Bundle\JWTAuthenticationBundle\LexikJWTAuthenticationBundle(),
            new Sonata\MediaBundle\SonataMediaBundle(),
            new Sonata\EasyExtendsBundle\SonataEasyExtendsBundle(),
            new Application\Sonata\MediaBundle\ApplicationSonataMediaBundle(),
            new JMS\SerializerBundle\JMSSerializerBundle(),
        ];

        if ('dev' === $this->getEnvironment()) {
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
        }

        return $bundles;
    }

    /**
     * {@inheritdoc}
     * @throws
     */
    protected function configureContainer(ContainerBuilder $container, LoaderInterface $loader)
    {
        $loader->load(__DIR__ . '/config/config.yml');

        if (isset($this->bundles['WebProfilerBundle'])) {
            $container->loadFromExtension('web_profiler', ['toolbar' => true, 'intercept_redirects' => false]);
        }
    }

    /**
     * {@inheritdoc}
     * @throws
     */
    protected function configureRoutes(RouteCollectionBuilder $routes)
    {
        if (isset($this->bundles['WebProfilerBundle'])) {
            $routes->import('@WebProfilerBundle/Resources/config/routing/wdt.xml', '/_wdt');
            $routes->import('@WebProfilerBundle/Resources/config/routing/profiler.xml', '/_profiler');
        }

        $routes->import(__DIR__ . '/config/routing.yml', '/', 'yaml');
        $routes->import(__DIR__ . '/../src/Core/Controller', '/', 'annotation');
    }

    public function getCacheDir()
    {
        return __DIR__ . '/../var/cache/' . $this->getEnvironment();
    }

    public function getLogDir()
    {
        return __DIR__ . '/../var/logs';
    }
}