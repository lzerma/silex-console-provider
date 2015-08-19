<?php
namespace SilexConsole\Provider;
use Silex\Application;
use Silex\ServiceProviderInterface;
use SilexConsole\Console\Application as ConsoleApplication;
use SilexConsole\Console\ConsoleEvent;
use SilexConsole\Console\ConsoleEvents;

/**
 * Class ConsoleServiceProvider
 *
 * @package SilexConsole\Provider
 */
class ConsoleServiceProvider implements ServiceProviderInterface
{
    /**
     * @param Application $app
     */
    public function register(Application $app)
    {
        $app['console'] = $app->share(function() use ($app) {
            $application = new ConsoleApplication(
                $app,
                $app['console.project_directory'],
                $app['console.name'],
                $app['console.version']
            );
            $app['dispatcher']->dispatch(ConsoleEvents::INIT, new ConsoleEvent($application));
            return $application;
        });
    }

    /**
     * @param Application $app
     */
    public function boot(Application $app)
    {
    }
}