<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ProductRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends AbstractController
{
    
    /**
     * @Route("/", name="home")
     */
    public function index(ProductRepository $productRepository, PaginatorInterface $paginator, Request $request)
    {
        $pagination = $paginator->paginate(
            $productRepository->findAll(),
            $request->query->getInt('page', 1),
            6
        );

        return $this->render('base.html.twig', [
            'pagination' => $pagination
        ]);
    }

    /**
     * @Route("/profile", name="profile")
     */
    public function profile()
    {
        return $this->render('profile/index.html.twig');
    }

        /**
 * @Route("/secure-area", name="homepage")
 */
public function indexAction()
{

    if($this->getUser()->getRoles('ROLE_USER'))
        return $this->redirect($this->generateUrl('home'));
    elseif($this->getUser()->getRoles('ROLE_ADMIN'))
        return $this->redirect($this->generateUrl('admin'));
    throw new \Exception(AccessDeniedException::class);
}
}
