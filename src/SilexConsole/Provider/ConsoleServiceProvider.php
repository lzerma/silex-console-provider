<?php
namespace SilexConsole\Provider;

use Pimple\ServiceProviderInterface;
use Pimple\Container;
use SilexConsole\Console\Application as ConsoleApplication;

/**
 * Class ConsoleServiceProvider
 *
 * @package SilexConsole\Provider
 */
class ConsoleServiceProvider implements ServiceProviderInterface
{
    /**
     * @param Container $app
     */
    public function register(Container $app)
    {
        $app['console'] = function ($app) {
            $application = new ConsoleApplication(
                $app['console.name'], $app['console.version'], $app
            );
            return $application;
        };
    }
}