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
         $user = new User();
        $form = $this->createForm(ForgotPasswordType::class,$user);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            print_r("email: ");
            print_r($user->getEmail());
            // 1) search user with the given email User!
            // $user = $this->getDoctrine()
            //              ->getRepository('AppBundle:User')
            //              ->findOneBy(array('email' => $user->getEmail()));
            $db_manager = $this->getDoctrine()->getManager();
            $query = $db_manager->createQuery(
                                                'SELECT u
                                                FROM AppBundle:User u
                                                WHERE u'.'.email = :email'
                                            )->setParameter('email', $user->getEmail());
            $user = $query->getResult();
            if (!$user) {
                throw $this->createNotFoundException('No User found for email '.$request);
            }
            else{
            $message = \Swift_Message::newInstance()
            ->setSubject('Hello Email')
            ->setFrom('saadwasem@gmail.com')
            ->setTo($user[0]->getEmail())
            ->setBody(
            $this->renderView(
                // app/Resources/views/Emails/registration.html.twig
                'emails/forgot_email.html.php',
                array('email' => $user[0]->getEmail())
            ),
            'text/html'
        )
        /*
         * If you also want to include a plaintext version of the message
        ->addPart(
            $this->renderView(
                'Emails/registration.txt.twig',
                array('name' => $name)
            ),
            'text/plain'
        )
        */
    ;
    $this->get('mailer')->send($message);
    // sendEmail($user[0]->getEmail());
    print_r($user);
            // ... do any other work - like send them an email, etc
            // maybe set a "flash" success message for the user
            //return $this->redirectToRoute('homepage');
        }
    }
        return $this->render('registration/forgot.html.php', array(
            'form' => $form->createView(),
            ));
    }
//     public function sendEmail($email_address)
//     {


//     return $this->render("your message has been sent");
// }
}
?>