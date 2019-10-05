<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index()
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    /**
     * @Route("/admin/espaceMusique", name="espaceMusique")
     */
    public function espaceMusique()
    {
        return $this->render('admin/espaceMusique.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    /**
     * @Route("/admin/espaceVideo", name="espaceVideo")
     */
    public function espaceVideo()
    {
        return $this->render('admin/espaceVideo.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    /**
     * @Route("/admin/espaceUser", name="espaceUser")
     */
    public function espaceUser()
    {
        return $this->render('admin/espaceUser.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
}
