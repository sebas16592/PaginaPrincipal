<?php

namespace App\Controller;

use App\Entity\Usuario;
use App\Form\Model\UserRegistrationFormModel;
use App\Form\UsuarioRegistrationFormType;
use App\Security\LoginFormAuthenticator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Guard\GuardAuthenticatorHandler;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    /**
     * @Route("/login", name="app_login")
     */
    public function login(AuthenticationUtils $authenticationUtils)
    {
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error
        ]);
    }

    /**
     * @Route("/logout", name="app_logout")
     * @throws \Exception
     */
    public function logout()
    {
        throw new \Exception('Will be intercepted before getting here');
    }

    /**
     * @Route("/register", name="app_register")
     */
    public function register(Request $request, UserPasswordEncoderInterface $passwordEncoder, GuardAuthenticatorHandler $guardHandler, LoginFormAuthenticator $formAuthenticator)
    {
        $form = $this->createForm(UsuarioRegistrationFormType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            /** @var UserRegistrationFormModel $userModel */
            $userModel = $form->getData();

            $user = new Usuario();
            $user->setEmail($userModel->email);
            $user->setPassword($passwordEncoder->encodePassword(
                $user,
                $userModel->plainPassword
            ));

            // be absolutely sure they agree
            if (true === $userModel->agreeTerms) {
                $user->agreeTerms();
            }

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            //return $this->redirectToRoute('app_account');
            return $guardHandler->authenticateUserAndHandleSuccess(
                $user,
                $request,
                $formAuthenticator,
                'main' //nombre del firewall que usamos en security.yaml
            );
        }

        /*if ($request->isMethod('POST')) {
            $user = new Usuario();
            $user->setEmail($request->request->get('email'));
            $user->setNombre('Mistery');
            $user->setPassword($passwordEncoder->encodePassword(
                $user, $request->request->get('password')));
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            //return $this->redirectToRoute('app_account');
            return $guardHandler->authenticateUserAndHandleSuccess(
                $user,
                $request,
                $formAuthenticator,
                'main' //nombre del firewall que usamos en security.yaml
            );
        }*/
        return $this->render('security/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }
}
