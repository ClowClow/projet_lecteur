<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SiteController extends AbstractController
{
    /**
     * @Route("/site", name="site")
     */
    public function index()
    {
        return $this->render('site/index.html.twig', [
            'controller_name' => 'SiteController',
        ]);
    }

    /**
     * @Route("/site/audio", name="audio")
     */
    public function audio()
    {
        return $this->render('site/audio.html.twig', [
            'controller_name' => 'SiteController',
        ]);
    }

    /**
     * @Route("/site/listeMusiques", name="listeMusiques")
     */
    public function listeMusiques()
    {
        return $this->render('site/listeMusiques.html.twig', [
            'controller_name' => 'SiteController',
        ]);
    }

    /**
     * @Route("/site/video", name="video")
     */
    public function video()
    {
        return $this->render('site/video.html.twig', [
            'controller_name' => 'SiteController',
        ]);
    }
}
