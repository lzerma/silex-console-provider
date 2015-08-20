<?php
namespace SilexConsole\Console;

use Silex\Application as SilexApplication;
use Symfony\Component\Console\Application as ConsoleApplication;

/**
 * Class Application
 *
 * @package SilexConsole\Console
 */
class Application extends ConsoleApplication
{
    /**
     * @var SilexApplication
     */
    private $silexApplication;

    /**
     * @var
     */
    private $projectDirectory;

    /**
     * @param SilexApplication $application
     * @param                  $projectDirectory
     * @param string           $name
     * @param string           $version
     */
    public function __construct(SilexApplication $application,
        $projectDirectory, $name = 'UNKNOWN', $version = 'UNKNOWN'
    ) {
        parent::__construct($name, $version);
        $this->silexApplication = $application;
        $this->projectDirectory = $projectDirectory;
        $application->boot();
    }

    /**
     * @return SilexApplication
     */
    public function getSilexApplication()
    {
        return $this->silexApplication;
    }

    /**
     * @return mixed
     */
    public function getProjectDirectory()
    {
        return $this->projectDirectory;
    }
}