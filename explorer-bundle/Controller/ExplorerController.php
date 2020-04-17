<?php
declare(strict_types=1);


namespace AD\ExplorerBundle\Controller;


use AD\ExplorerBundle\Service\FileUploader;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ExplorerController extends AbstractController
{
    public function add(Request $request, FileUploader $fileUploader)
    {
        $url = $this->generateUrl('explorer_add');

        return new Response("AD Explorer Add {$fileUploader->targetDirectory} {$url}");
    }
}