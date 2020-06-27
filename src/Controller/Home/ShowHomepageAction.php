<?php

namespace App\Controller\Home;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ShowHomepageAction extends AbstractController
{
    public function __invoke()
    {
        return $this->render('home/index.html.twig');
    }
}
