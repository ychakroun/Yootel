<?php

namespace Bundles\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AccountController extends Controller
{
    /**
     * @Route("/mon-compte")
     */
    public function indexAction()
    {
        return $this->render('FrontBundle:User:Account/index.html.twig');
    }
}
