<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
# use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class HomeController extends AbstractController
{
    /**
     * #[Route('/home', name: 'app_home')]
    */
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'hello' => 'Hola me llamo Jesus bienvenido al curso de Symfony 6'
        ]);
    }
    
    public function animales(string $name = null): Response
    {
        /**
         * if ($name == null){
           * $name = "Bolt";
        
         */
       # $name = u(str_replace("-", " ", $name))->title(true);
       $name = str_replace("-", " ", $name);



        $title = "Bienvenido a la pagina de Animales";

        return $this->render('home/animales.html.twig', [
            'title' => $title,
            'name' => $name
        ]);
    }
}