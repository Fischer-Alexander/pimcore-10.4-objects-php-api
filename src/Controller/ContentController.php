<?php

namespace App\Controller;

use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Request;
use Pimcore\Model\DataObject\Blog;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class ContentController extends FrontendController
{
    /**
     * @Template
     */
    public function defaultAction()
    {
        return[];
    }


    /**
     * @Route("/", name="app_search", methods="POST")
     */
    public function search(Request $request)
    {
        $searchterm = $request->request->get('searchterm');

        $search_hits= [];

        $blogList = new Blog\Listing();
        $blogList->setOrderKey('date');
        $blogList->setOrder('DESC');

        foreach ($blogList as $item) {

            $blogtitel = $item->getTitle();
            $blogcontent = $item->getContent();

            if (str_contains($blogtitel, $searchterm) || str_contains($blogcontent, $searchterm)) {
                array_push($search_hits, $item);
            }
        }

            return $this->render('blog/listing.html.twig', [
                'isPortal' => true,
                'blogs' => $search_hits,
            ]);

        }





    public function portalAction()
    {
        $blogList = new Blog\Listing();
        $blogList->setOrderKey('date');
        $blogList->setOrder('DESC');
        $blogList->setLimit(8);

        return $this->render('content/portal.html.twig', [
            'isPortal' => true,
            'blogs' => $blogList,
        ]);
    }
}
