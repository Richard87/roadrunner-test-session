<?php
/**
 * Created by PhpStorm.
 * User: richard
 * Date: 20.12.18
 * Time: 11:32
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController
{
    /** @Route("/") */
    public function indexAction(SessionInterface $session){
        $x = $session->get("x",0);
        $session->set("x", ++$x);

        return new Response($x);
    }
}