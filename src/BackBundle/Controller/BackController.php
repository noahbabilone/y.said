<?php

namespace BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class BackController extends Controller
{
    /**
     * @Route("/",name="back_home")
     */
    public function indexAction()
    {
        return $this->render('BackBundle:Default:index.html.twig');
    }
}
