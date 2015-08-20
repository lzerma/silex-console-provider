<?php
namespace SilexConsole\Console;

use Symfony\Component\EventDispatcher\Event;
use SilexConsole\Console\Application;

/**
 * Class ConsoleEvent
 *
 * @package SilexConsole\Console
 */
class ConsoleEvent extends Event
{
    /**
     * @var Application
     */
    private $application;

    /**
     * @param Application $application
     */
    public function __construct(Application $application)
    {
        $this->application = $application;
    }

    /**
     * @return Application
     */
    public function getApplication()
    {
        return $this->application;
    }
}