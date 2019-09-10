<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace VICTOR\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use VICTOR\TestBundle\Entity\User;

/**
 * Description of UserController
 *
 * @author syn
 */
class UserController extends Controller {
    public function indexAction(){
        $em = $this->getDoctrine()->getRepository(User::class);
        $users = $em->findAll();
        $title = 'Liste des utilisateurs';
        return $this->render('@VICTORTest/User/index.html.twig', ['title' => $title, 'users'=> $users]); // pas sûr pour le chemin
    }
    public function showAction($id){
        $em = $this->getDoctrine()->getRepository(User::class);
        $user = $em->find($id);
        if($user == null){
            throw $this->createNotFoundException('Utilisateur non trouvé !');
        }
        $title = 'Détails utilisateur';
        return $this->render('@VICTORTest/User/show.html.twig', ['title' => $title, 'user'=> $user]); // pas sûr pour le chemin
    }
    public function createAction(Request $request){
        $user = new User();
        $formfactory = $this->get('form.factory');
        $formBuilder = $formfactory->createBuilder(FormType::class, $user);
        $formBuilder->add('firstName', TextType::class)
                ->add('lastName', TextType::class)
                ->add('mail', TextType::class)
                ->add('motivation', TextareaType::class)
                ->add('palme', IntegerType::class)
                ->add('valider', SubmitType::class);
        $form = $formBuilder->getForm();
        
        if($request->isMethod('POST') && $form->handleRequest($request)->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            $this->redirectToRoute('@VICTORTest/User/index.html.twig');
            echo 'YEEEEEES !!!';
        }
        
        $title = 'Ajout d\'un utilisateur';
        return $this->render('@VICTORTest/User/create.html.twig', ['title' => $title, 'form'=>$form->createView()]);
    }
}