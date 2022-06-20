<?php

namespace App\Controller;

use Pimcore\Controller\FrontendController;
use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\Blog;
use Pimcore\Model\DataObject\Concrete;
use Pimcore\Model\DataObject\Category;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends FrontendController
{


    /**
     * @Route("/blog/{slug}")
     */
    public function blogDetail(string $slug){
        $entries = new DataObject\Blog\Listing();
        $condition_string = "slug=". "'".$slug. "'";
        $entries->setCondition($condition_string);
        $results = [];
        foreach ($entries as $entry) {
            array_push($results, $entry);
        }
        $blogObject = $results[0];

        return $this->render('blog/detail.html.twig', [
           'blog' => $blogObject,
        ]);
    }


    /**
     * @Route("/categories/{categoryname}~c{category}", name="shop-category", defaults={"path"=""}, requirements={"path"=".*?", "categoryname"="[\w-]+", "category"="\d+"})
     *
     * @param Request $request
     *
     * @return Response
     */
    public function listingAction(Request $request)
    {
        $params = array_merge($request->query->all(), $request->attributes->all());
        $categoryidrequested = $params['category'];

        $blogList = new Blog\Listing();
        $blogList->setOrderKey('date');
        $blogList->setOrder('DESC');

        $filterdBlogList = [];

        foreach($blogList as $blog) {
            $categoryid =  $blog->getCategories();
            foreach ($categoryid as $category) {
                if ($category->getId() == $categoryidrequested) {
                    array_push($filterdBlogList, $blog);
                }
            }
        }

        return $this->render('blog/listing.html.twig', [
           'blogs' => $filterdBlogList,
        ]);

    }



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
