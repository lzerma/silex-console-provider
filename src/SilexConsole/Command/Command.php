<?php
namespace SilexConsole\Command;
use Symfony\Component\Console\Command\Command as BaseCommand;

/**
 * Class Command
 *
 * @package SilexConsole\Command
 */
class Command extends BaseCommand
{
    /**
     * @return mixed
     */
    public function getSilexApplication()
    {
        return $this->getApplication()->getSilexApplication();
    }

    /**
     * @return mixed
     */
    public function getProjectDirectory()
    {
        return $this->getApplication()->getProjectDirectory();
    }
}