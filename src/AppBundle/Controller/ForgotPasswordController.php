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
use AppBundle\Form\Type\ForgotPasswordType;

class ForgotPasswordController extends Controller
{
    /**
     * @Route("/forgot", name="forgot_password")
     */
    public function forgotPasswordAction(Request $request)
    {
        $form = $this->createForm(ForgotPasswordType::class);
        

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            print_r($request);
            exit();
            // 1) search user with the given email User!
            $user = $this->getDoctrine()
                            ->getRepository('AppBundle:User')
                            ->find($);
                            if (!$product) {
                                throw $this->createNotFoundException(
                                    'No product found for id '.$productId
                                    );
                                    }
                                    // ... do any other work - like send them an email, etc
                                    // maybe set a "flash" success message for the user
                                    return $this->redirectToRoute('homepage');
                                }
                                return $this->render('registration/forgot.html.php', array(
                                    'form' => $form->createView(),
                                    ));
                            }
                        }
?>