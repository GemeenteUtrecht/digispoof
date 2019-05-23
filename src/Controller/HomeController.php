<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{ 
	/**
	* @Route("/")
	*/
	public function indexAction()
	{
		$number = 3;
		
		return $this->render('home/index.html.twig', [
				'number' => $number,
		]);
	}
}