<?php


namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use symfony\component\routing\annotation\Route;

/**
 * Description of voyagesController
 *
 * @author hmagn
 */
class voyagesController extends AbstractController {
     /**
     * @Route("/voyages", name="voyages")
     * @return Response
     */
    public function index(): Response {
        return $this->render("pages/voyages.html.twig");
    }  
    
}
