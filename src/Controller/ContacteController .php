<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class ContacteController
{
     
    /**
     *@var Environment 
    */ 
      private $twig;
   
     public function __construct(Environment $twigs){
         
         $this->twig = $twigs ;
     }

     public function index()
     {
        // $number = random_int(0, 100);
 
         return new Response($this->twig ->render('contacte/acceuilContacte.html.twig') );
     }
    
    }