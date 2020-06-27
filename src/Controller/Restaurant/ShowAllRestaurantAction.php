<?php

namespace App\Controller\Restaurant;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Restaurant;

class ShowAllRestaurantAction extends AbstractController
{
    public function __invoke()
    {
        $data = $this->getDoctrine()
            ->getRepository(Restaurant::class)
            ->findAll();

        return $this->render('restaurant/index.html.twig', [
            'restaurant' => $data,
        ]);
    }
}
