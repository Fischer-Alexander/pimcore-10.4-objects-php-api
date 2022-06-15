<?php

namespace App\Controller;

use Pimcore\Controller\FrontendController;
use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\Blog;
use Pimcore\Model\DataObject\Concrete;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
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

    /**
     * @param Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function blogTeaserAction(Request $request)
    {

        if ($request->get('type') == 'object') {
            $blog = Blog::getById($request->get('id'));

            return $this->render('blog/blog_teaser.html.twig', [
                'blog' => $blog,
            ]);
        }

        throw new NotFoundHttpException('Blog not found.');
    }
}
