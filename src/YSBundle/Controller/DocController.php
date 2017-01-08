<?php

namespace YSBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * @Route("/doc")
 */
class DocController extends Controller
{
    /**
     * @Route("/", name="doc_index")
     */
    public function indexAction()
    {
        return $this->render('YSBundle:Pages/Doc:css3.html.twig');
    }


}
