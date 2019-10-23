<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use App\Entity\Client;
use App\Repository\ClientRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;


class ClientController extends AbstractController
{
     
    

      /**
     *@param ClientRepository $repository
    */ 
    // private $repository;

   
    //  public function __construct(){
         
    //      $this->repository = $repository ;
    //  }

     public function index(ClientRepository $repository ) : Response
     {
        
        $client=$repository->findAll();
         return $this->render('client/aceuilClient.html.twig', ['client'=> $client ]);
     }

    }