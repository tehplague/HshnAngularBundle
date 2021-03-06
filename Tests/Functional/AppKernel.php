<?php


namespace Hshn\AngularBundle\Tests\Functional;

use Hshn\AngularBundle\HshnAngularBundle;
use Symfony\Bundle\AsseticBundle\AsseticBundle;
use Symfony\Bundle\FrameworkBundle\FrameworkBundle;
use Symfony\Bundle\TwigBundle\TwigBundle;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\HttpKernel\Kernel;


/**
 * @author Shota Hoshino <lga0503@gmail.com>
 */
class AppKernel extends Kernel
{

    /**
     * {@inheritdoc}
     */
    public function registerBundles()
    {
        return array(
            new FrameworkBundle(),
            new TwigBundle(),
            new AsseticBundle(),
            new HshnAngularBundle(),
        );
    }

    /**
     * {@inheritdoc}
     */
    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config.yml');
    }
}
