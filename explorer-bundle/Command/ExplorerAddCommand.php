<?php
declare(strict_types=1);

namespace AD\ExplorerBundle\Command;

use AD\ExplorerBundle\Service\FileUploader;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

// Easier to debug an injected service using a command than a controller
class ExplorerAddCommand extends Command
{
    private $fileUploader;

    protected static $defaultName = 'ad:explorer:add';

    public function __construct(FileUploader $fileUploader)
    {
        parent::__construct();
        $this->fileUploader = $fileUploader;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        echo "AD Explorer Add " . $this->fileUploader->targetDirectory . "\n";
        return 0;
    }
}
