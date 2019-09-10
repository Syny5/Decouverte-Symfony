<?php

namespace VICTOR\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@VICTORTest/Default/index.html.twig');
    }
}
