<?php
namespace SilexConsole\Command;

use Symfony\Component\Console\Command\Command as SymfonyCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class Command
 *
 * @package SilexConsole\Command
 */
class Command extends SymfonyCommand {

    /**
     * @return \Symfony\Component\Console\Application
     */
    public function getSilexApplication() {
        return $this->getApplication();
    }
}