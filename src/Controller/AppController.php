<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{
    #[Route('/{any?}', name: 'app', requirements: ["any" => ".*"])]
    public function index(): Response
    {
        return $this->render('/index.html');
    }
}
