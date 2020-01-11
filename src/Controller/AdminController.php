<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class AdminController extends AbstractController
{
    /**
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_SUPER_ADMIN')")
     * @Route("/admin", name="admin")
     */
    public function index()
    {
        return $this->render('PAGES/admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
}
