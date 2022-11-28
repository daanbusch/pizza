<?php

namespace App\Controller;

use App\Entity\Category;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class guestController extends AbstractController

{
    #[Route('/',name: 'home')]
    public function showProducts(ManagerRegistry $doctrine){
        $products = $doctrine->getRepository(Category::class)->findAll();
        return $this->render('home.html.twig',[
            'products' => $products
        ]);
    }
}