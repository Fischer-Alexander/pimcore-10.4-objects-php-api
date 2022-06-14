<?php

namespace App\Controller;

use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Request;
use Pimcore\Model\DataObject\Blog;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class ContentController extends FrontendController
{
    /**
     * @Template
     */
    public function defaultAction()
    {
        return[];
    }

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
