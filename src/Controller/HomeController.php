<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class HomeController extends AbstractController
{


    /**
     * @Route("/", name="home")
     * @return Response
     */


    public function index(): Response
    {
        /**return new Response($this->twig->render('pages/home.html.twig'));*/
        return $this->render('pages/home.html.twig');

    }


}
/**
 * Created by IntelliJ IDEA.
 * User: mamadou
 * Date: 03/04/2019
 * Time: 11:49
 */