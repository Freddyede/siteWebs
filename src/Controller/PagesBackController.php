<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use App\Service\GetFullServices;

class PagesBackController extends AbstractController
{
    /**
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_SUPER_ADMIN')")
     * @Route("/back/pages", name="pages_back")
     */
    public function index(GetFullServices $gfs)
    {
        $button = $gfs->className('PagesBack');
        return $this->render('BACK/PAGES/index.html.twig', [
            'controller_name' => 'PagesBackController',
            'classButton'=>$button
        ]);
    }
}
