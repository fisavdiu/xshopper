<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Repository\ProductRepository;
class ShoppingCartController extends AbstractController
{
    /**
     * @Route("/shoppingcart", name="shopping_cart")
     */
    public function index(SessionInterface $session, ProductRepository $productRepository)
    {
        $shoppingcart = $session->get('shoppingcart', []);

        $shoppingcartWithData = [];

        foreach($shoppingcart as $id => $quantity ) {
            $shoppingcartWithData[] = [
                'product' => $productRepository->find($id),
                'quantity' => $quantity
            ];
        }
        $total = 0; 

        foreach($shoppingcartWithData as $item) {
            $totalItem = $item['product']->getPrice() * $item['quantity'];
            $total+=$totalItem;
        }

        return $this->render('shopping_cart/index.html.twig', [
            'items' => $shoppingcartWithData,
            'total' => $total
        ]);
    }

    /**
     * @Route("/shoppingcart/add/{id}" , name="cart_add")
     */

    public function add($id, SessionInterface $session){


        $shoppingcart = $session->get('shoppingcart', []);

        if(!empty($shoppingcart[$id])) {
            $shoppingcart[$id]++;
        } else { 
            $shoppingcart[$id] = 1;
        }

       

        $session->set('shoppingcart', $shoppingcart);

        return $this->redirectToRoute('shopping_cart');
    }
    /**
     * @Route("/shoppingcart/remove/{id}", name="cart_remove")
     */
    public function remove($id, SessionInterface $session) 
    {
        $shoppingcart = $session->get('shoppingcart', []);

        if(!empty($shoppingcart[$id])){
            unset($shoppingcart[$id]);
        }

        $session->set('shoppingcart', $shoppingcart);

        return $this->redirectToRoute('shopping_cart');


    }
}
