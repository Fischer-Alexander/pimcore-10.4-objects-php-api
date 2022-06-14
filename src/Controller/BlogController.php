<?php

namespace App\Controller;

use Pimcore\Controller\FrontendController;
use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\Blog;
use Pimcore\Model\DataObject\Concrete;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends FrontendController
{
    /**
     * @Route("/blogs/{blogtitle}~n{blog}", name="blog-detail")
     */
    public function detailAction(Request $request)
    {
        $blog = Blog::getById($request->get('blog'));

        return $this->render('blog/detail.html.twig', [
           'blog' => $blog,
        ]);
    }
}
