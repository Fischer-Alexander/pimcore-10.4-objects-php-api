<?php

namespace App\Controller;

use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Request;
use Pimcore\Model\DataObject\Blog;

class ContentController extends FrontendController
{
    public function portalAction()
    {
        $blogList = new Blog\Listing();
        $blogList->setOrderKey('date');
        $blogList->setOrder('DESC');

        return $this->render('content/portal.html.twig', [
            'isPortal' => true,
            'blogs' => $blogList,
        ]);
    }
}
