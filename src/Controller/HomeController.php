<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'index' => 'Acceuil',
        ]);
    }

    #[Route('/about' , name: 'app_about')]
    public function about(): Response
    {
        return $this->render('home/about.html.twig', [
            'about' => 'A propos',
            'paragraphe' => 'Exundant oratoris philosopho speciem oratoris gestus gestus gestus ita ritu ritu domus exundant gestus instrumenta ludicrarum philosopho exundant cultibus cum cantor clausis fabricantur in exundant ludibriis cum studiorum seriis ingentes studiorum ita in in resultantes denique tinnitu organa non pro histrionici vocali levia paucae vocali levia fidium nunc torpentis sit speciem sepulcrorum speciem pro seriis sit carpentorum gestus denique speciem levia paucae sepulcrorum locum torpentis cultibus speciem resultantes et gestus hydraulica vocali carpentorum ludicrarum et pro bybliothecis ingentes levia seriis tinnitu perpetuum ritu cultibus sit tibiaeque tibiaeque in celebratae sit paucae vocali antea fidium lyrae perflabili fabricantur lyrae ad sepulcrorum.
            ',
        ]);
    }

    #[Route('/contact' , name: 'app_contact')]
    public function contac(): Response
    {
        return $this->render('home/contact.html.twig', [
            'contact' => 'Contact',
        ]);
    }
}
