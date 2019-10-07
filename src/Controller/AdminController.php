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
        return $this->render('admin/musique/espaceMusique.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    /**
     * @Route("/admin/espaceMusique/addMusique", name="addMusique")
     */
    public function addMusique()
    {
        return $this->render('admin/musique/addMusique.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    /**
     * @Route("/admin/espaceMusique/listMusique", name="listMusique")
     */
    public function listMusique()
    {
        return $this->render('admin/musique/listMusique.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    /**
     * @Route("/admin/espaceMusique/modifyMusique", name="modifyMusique")
     */
    public function modifyMusique()
    {
        return $this->render('admin/musique/modifyMusique.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    /**
     * @Route("/admin/espaceMusique/removeMusique", name="removeMusique")
     */
    public function removeMusique()
    {
        return $this->render('admin/musique/removeMusique.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    /**
     * @Route("/admin/espaceMusique/addAlbum", name="addAlbum")
     */
    public function addAlbum()
    {
        return $this->render('admin/musique/addAlbum.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    /**
     * @Route("/admin/espaceMusique/listAlbum", name="listAlbum")
     */
    public function listAlbum()
    {
        return $this->render('admin/musique/listAlbum.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    /**
     * @Route("/admin/espaceMusique/modifyAlbum", name="modifyAlbum")
     */
    public function modifyAlbum()
    {
        return $this->render('admin/musique/modifyAlbum.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    /**
     * @Route("/admin/espaceMusique/removeAlbum", name="removeAlbum")
     */
    public function removeAlbum()
    {
        return $this->render('admin/musique/removeAlbum.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    /**
     * @Route("/admin/espaceVideo", name="espaceVideo")
     */
    public function espaceVideo()
    {
        return $this->render('admin/video/espaceVideo.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    /**
     * @Route("/admin/espaceUser", name="espaceUser")
     */
    public function espaceUser()
    {
        return $this->render('admin/user/espaceUser.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
}
