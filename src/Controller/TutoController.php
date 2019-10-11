<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class TutoController extends Controller
{

    /**
     * @Route("/", name="homepage")
     */
    public function tutorialesAction(Request $request)
    {

        return $this->render('tutoGit/indexGit.html.twig');
        
    }
    

}