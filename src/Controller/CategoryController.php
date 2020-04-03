<?php

namespace App\Controller;

use App\Entity\Category;
use App\Repository\ArticleRepository;
use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class CategoryController
 * @package App\Controller
 *
 * @Route("/categorie")
 */
class CategoryController extends AbstractController
{
    /**
     * @Route("/{id}", requirements={"id": "\d+"})
     */
    public function index(Category $category)
    {
        return $this->render(
            'category/index.html.twig',
            [
                'category' => $category,
            ]
        );
    }

    public function menu(ArticleRepository $repository, CategoryRepository $repository)
    {
        // les 3 derniers articles de la catégorie
        $categories = $repository->findBy(
            ['category' => $category],
            ['publicationDate' => 'ASC'],
            3
        );


        return $this->render(
            'category/menu.html.twig',
            [
                'categories' => $categories,
                'articles' => $articles
            ]
        );
    }
}
