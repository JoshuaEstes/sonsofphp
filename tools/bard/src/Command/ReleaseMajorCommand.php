<?php

namespace SonsOfPHP\Bard\Command;

use SonsOfPHP\Component\Json\Json;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Create a major release
 *
 * @author Joshua Estes <joshua@sonsofphp.com>
 */
final class ReleaseMajorCommand extends AbstractCommand
{
    protected static $defaultName = 'release:major';
    private Json $json;

    /**
     * {@inheritdoc}
     */
    public function __construct()
    {
        $this->json = new Json();

        parent::__construct();
    }

    /**
     * {@inheritdoc}
     */
    protected function configure(): void
    {
        $this
            ->setHidden()
            ->setDescription('')
        ;
    }

    /**
     * {@inheritdoc}
     */
    protected function initialize(InputInterface $input, OutputInterface $output)
    {
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln('@todo');
        return self::SUCCESS;
    }
}
