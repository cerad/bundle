<?php
declare(strict_types=1);

namespace AD\ExplorerBundle\Service;

use Symfony\Component\String\Slugger\SluggerInterface;

class FileUploader
{
    public $targetDirectory;
    private $slugger;

    public function __construct(string $targetDirectory, SluggerInterface $slugger)
    {
        $this->targetDirectory = $targetDirectory;
        $this->slugger = $slugger;
    }
}