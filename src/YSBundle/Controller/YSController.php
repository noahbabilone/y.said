<?php

namespace YSBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class YSController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('YSBundle:Pages:index.html.twig');
    }

    /**
     * @Route("/contact", name="contactPage")
     */
    public function HomeAction()
    {
        return $this->render('YSBundle:Pages:index.html.twig');
    }


}
