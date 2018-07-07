<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\DoudouList;

class DefaultController extends AbstractController
{

    public function index()
    {
       $todo = new DoudouList;

        return $this->render('index.html.twig');
    }
}