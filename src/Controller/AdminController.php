<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;

use App\Entity\Album;
use App\Form\AlbumType;
use App\Repository\AlbumRepository;

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
     * @Route("/admin/congratulation", name="congratulation")
     */
    public function congratulation()
    {
        return $this->render('admin/congratulation.html.twig', [
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
    public function addAlbum(Request $request, ObjectManager $manager)
    {

        $album = new Album();
        $formAlbum = $this->createForm(AlbumType::class, $album);
        $formAlbum->handleRequest($request);

        if($formAlbum->isSubmitted() && $formAlbum->isValid()) {
          $manager->persist($album);
          $manager->flush();
          return $this->redirectToRoute('congratulation');
        }

        return $this->render('admin/musique/addAlbum.html.twig', [
            'controller_name' => 'AdminController',
            'formAlbum'=> $formAlbum->createView(),
        ]);
    }

    /**
     * @Route("/admin/espaceMusique/listAlbum", name="listAlbum")
     */
    public function listAlbum(Request $request, ObjectManager $manager,AlbumRepository $repoAlbum)
    {
        $listAlbum = $repoAlbum->findAll();

        if(isset($_POST['album'])) {
          foreach($_POST['album'] as $id) {
            $number = $repoAlbum->find($id);
            $manager->persist($number);
          }
          $manager->flush();
          return $this->redirect('modifyAlbum/'.$id);

        }
        return $this->render('admin/musique/listAlbum.html.twig', [
            'controller_name' => 'AdminController',
            'listAlbum' => $listAlbum,
        ]);
    }

    /**
     * @Route("/admin/espaceMusique/modifyAlbum/{id}", name="modifyAlbum")
     */
    public function modifyAlbum(Album $album, Request $request, ObjectManager $manager)
    {
        $formAlbum = $this->createFormBuilder($album)
                          ->add('title')
                          ->add('description')
                          ->add('collection')
                          ->add('notes')
                          ->getForm();
        $formAlbum->handleRequest($request);

        if($formAlbum->isSubmitted() && $formAlbum->isValid()) {
          $manager->persist($album);
          $manager->flush();
          return $this->redirectToRoute('congratulation');
        }
        return $this->render('admin/musique/modifyAlbum.html.twig', [
            'controller_name' => 'AdminController',
            'formAlbum' => $formAlbum->createView(),
        ]);
    }

    /**
     * @Route("/admin/espaceMusique/removeAlbum", name="removeAlbum")
     */
    public function removeAlbum(Request $request, ObjectManager $manager,AlbumRepository $repoAlbum)
    {
        $listAlbum = $repoAlbum->findAll();

        if (isset($_POST['album'])) {
          foreach ($_POST['album'] as $id) {
            $album = $repoAlbum->find($id);
            $manager->remove($album);
          }
          $manager->flush();
          return $this->redirectToRoute('congratulation');
        }
        return $this->render('admin/musique/removeAlbum.html.twig', [
            'controller_name' => 'AdminController',
            'listAlbum'=> $listAlbum,
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
