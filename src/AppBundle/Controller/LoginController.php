<?php

namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Templating\PhpEngine;
use Symfony\Component\Templating\TemplateNameParser;
use Symfony\Component\Templating\Loader\FilesystemLoader;
use AppBundle\Entity\User;
use AppBundle\Form\Type\UserType;

// src/AppBundle/Controller/LoginController.php

// ...
class LoginController extends Controller{
	
	/**
     * @Route("/login" , name = "login")
     */
	public function loginAction(Request $request)
	{ 
         $authenticationUtils = $this->get('security.authentication_utils');

    // get the login error if there is one
    $error = $authenticationUtils->getLastAuthenticationError();

    // last username entered by the user
    $lastUsername = $authenticationUtils->getLastUsername();

        // $form = $this->createForm(UserType::class);
        return $this->render('registration/login.html.php', array(
            'last_username' => $lastUsername,
            'error'         => $error,
        ));

	}
}