<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Product;
class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
         $product = new Product();
         $product->setTitle("Elba Mask");;
         $product->setDescription("Maske shumeperdorimshme ELBA");
         $product->setPrice(3.99);
         $product->setCategory(1);
         $product->setImage('https://i.ibb.co/Gdtz0f5/Screenshot-5.png');
         $manager->persist($product);

         $product1 = new Product();
         $product1->setTitle("Elba Gote");;
         $product1->setDescription("Gote nga porcelani ELBA");
         $product1->setPrice(4.99);
         $product1->setCategory(2);
         $product1->setImage('https://i.ibb.co/Th9PFXQ/Screenshot-2.png');
         $manager->persist($product1);

         $product2 = new Product();
         $product2->setTitle("Elba Maice");;
         $product2->setDescription("Maice Elba 100% pambuk");
         $product2->setPrice(9.99);
         $product2->setCategory(3);
         $product2->setImage('https://i.ibb.co/fxcsyCz/Screenshot-1.png');
         $manager->persist($product2);

         $product3 = new Product();
         $product3->setTitle("Varëse çelësash");;
         $product3->setDescription("Varëse çelësash ELBA");
         $product3->setPrice(2.99);
         $product3->setCategory(4);
         $product3->setImage('https://i.ibb.co/xX4Ns0Y/Screenshot-3.png');
         $manager->persist($product3);

         $product4 = new Product();
         $product4->setTitle("Mbështjellës për telefon ELBA");;
         $product4->setDescription("Mbështjellës për telefon nga silikoni");
         $product4->setPrice(7.99);
         $product4->setCategory(5);
         $product4->setImage('https://i.ibb.co/xg23wTt/Screenshot-4.png');
         $manager->persist($product4);

         $product5 = new Product();
         $product5->setTitle("Çantë ELBA");;
         $product5->setDescription("Çantë dore EKO");
         $product5->setPrice(5.99);
         $product5->setCategory(6);
         $product5->setImage('https://i.ibb.co/zbymbM4/view.jpg');
         $manager->persist($product5);

         $product6 = new Product();
         $product6->setTitle("Maice per femra ELBA");;
         $product6->setDescription("Maice ELBA 100% Pambuk");
         $product6->setPrice(9.99);
         $product6->setCategory(3);
         $product6->setImage('https://i.ibb.co/jZFr03v/Screenshot-6.png');
         $manager->persist($product6);

         $product7 = new Product();
         $product7->setTitle("Kapel ELBA");;
         $product7->setDescription("Kapel");
         $product7->setPrice(8.99);
         $product7->setCategory(7);
         $product7->setImage('https://i.ibb.co/yN0ZQcG/preview.jpg');
         $manager->persist($product7);

        $manager->flush();
    }
}
