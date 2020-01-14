<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\GetFullServices;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(GetFullServices $gfs)
    {   
        return $this->render('FRONT/home/index.html.twig', [
            'controller_name' => 'HomeController',
            'classNavbar'=>'light',
            'classButton'=>$gfs->className('HomeController')
        ]);
    }
}
