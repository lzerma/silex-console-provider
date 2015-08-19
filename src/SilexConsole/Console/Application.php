<?php
namespace SilexConsole\Console;

use Silex\Application as SilexApplication;
use Symfony\Component\Console\Application as ConsoleApplication;

/**
 * Class Application
 *
 * @package SilexConsole\Console
 */
class Application
{
    /**
     * @var
     */
    private $app;

    /**
     * @param $name
     * @param $version
     * @param $application
     */
    public function __construct($name, $version, $application)
    {
        parent::__construct($name, $version);
        $this->app = $application;
        $application->boot();
    }

    /**
     * @return mixed
     */
    public function getApplication()
    {
        return $this->app;
    }
}