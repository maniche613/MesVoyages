<?php



namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use symfony\component\routing\annotation\Route;

/**
 * Description of AccueilController
 *
 * @author hmagn
 */
class AccueilController {
    
    /**
     * @Route("/", name="accueil")
     * @return Response
     */
    public function index(): Response {
        return new response('hello world');
        
    }
}
