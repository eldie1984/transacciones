<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use AppBundle\Controller\CsvResponse;

class DefaultController extends AbstractController {

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request) {
        $form = $this->createFormBuilder()
                ->add('submitFile', FileType::class, array('label' => 'File to Submit'))
                ->add('Cargar', SubmitType::class, array('label' => 'Cargar'));
                //->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // Bind request to the form
            //$form->bindRequest($request);
            // If form is valid
            if ($form->isValid()) {
                // Get file
                $file = $form->get('submitFile');
                $fileName = md5(uniqid()).'.'.$file->guessExtension();

            // Move the file to the directory where brochures are stored
            $file->move(
            '/tmp/',
                $fileName
            );

                // Your csv file here when you hit submit button
              //  $archivo=$file->getData()->getPathName().'/'.$file->getData()->getFileName();
                
                var_dump($contents = file_get_contents('/tmp/'.$fileName));
                die();
                //->getPathName()
            }
        }

        return $this->render('AppBundle:Default:index.html.twig', array('form' => $form->createView(),)
        );
        // replace this example code with whatever you need
//        return $this->render('default/index.html.twig', [
//                    'base_dir' => realpath($this->getParameter('kernel.project_dir')) . DIRECTORY_SEPARATOR,
//        ]);
    }

}
