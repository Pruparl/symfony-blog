<?php


namespace App\Controller\Admin;

use App\Entity\Article;
use App\Entity\Comment;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class CommentController
 * @package App\Controller\Admin
 */
class CommentController extends AbstractController
{
    /**
     * @Route("/article/{id}")
     */
    public function index(Article $article)
    {
        return $this->render(
            'admin/article/comments/index.html.twig',
            [
                'article' => article
            ]
        );
    }

    /**
     * @Route("/suppresion/{id}")
     */
    public function delete(EntityManagerInterface $manager, Comment $comment)
    {
        $manager->remove($comment);
        $manager->flush();
    }

}