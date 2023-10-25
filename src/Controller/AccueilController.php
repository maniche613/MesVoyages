<?php



namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use symfony\component\routing\annotation\Route;

/**
 * Description of AccueilController
 *
 * @author hmagn
 */
class AccueilController extends AbstractController{
    
    /**
     * @Route("/", name="accueil")
     * @return Response
     */
    public function index(): Response {
        return $this->render("pages/accueil.html.twig");
        
    }
}
