<?php

namespace App\Controller\Admin;

use App\Entity\Product;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;

class ProductCrudController extends AbstractCrudController
{
    // it must return a FQCN (fully-qualified class name) of a Doctrine ORM entity
    public static function getEntityFqcn(): string
    {
        return Product::class;
    }
    
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            
        ->setEntityLabelInSingular('Product')
        ->setEntityLabelInPlural('Products')
        ->setSearchFields(['id', 'title', 'description', 'photo', 'category', 'price', ]);

    }
    // ...
}