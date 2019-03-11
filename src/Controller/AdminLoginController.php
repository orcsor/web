<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class AdminLoginController
 * @package App\Controller
 * @Route("/admin")
 */
class AdminLoginController extends AbstractController
{
  /**
   * @Route("/", name="admin_index")
   */
  public function index()
  {
    return $this->render('admin_login/index.html.twig', [
      'controller_name' => 'AdminLoginController',
    ]);
  }

  /**
   * @Route("/login", name="admin_login")
   */
  public function login()
  {
    return $this->render('admin_login/login.html.twig');
  }
 
}
