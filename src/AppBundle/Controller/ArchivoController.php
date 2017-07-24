<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Archivo;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;
use AppBundle\Controller\CsvResponse;
use AppBundle\Entity\Informe;


/**
 * Archivo controller.
 *
 * @Route("archivo")
 */
class ArchivoController extends Controller
{
    /**
     * Creates a new archivo entity.
     *
     * @Route("/new", name="archivos_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $archivo = new Archivo();
        $form = $this->createForm('AppBundle\Form\ArchivosType', $archivo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $archivo->getDireccion();
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            $file->move(
            '/tmp/',
                $fileName
            );
            $em = $this->getDoctrine()->getManager();
            //$em->persist($archivo);
            //$em->flush();
//            $file_to_array=explode("\n", str_replace("\"", "",file_get_contents('/tmp/'.$fileName)));
            //22622085
            $datos=array_map('str_getcsv',file('/tmp/'.$fileName));
            if ($archivo->getEncabezado()==1){
                unset($datos[0]);
            }
            foreach($datos as $unInforme){
//                var_dump($unInforme);
//                die();
//                var_dump($unInforme[18]);
                $product = $this->getDoctrine()
        ->getRepository(Informe::class)
        ->findOneBy(array('nroRemitente' => $unInforme[0]));

    if (!$product) {
        $informe = new Informe();
                $informe->setId($unInforme[18]);
                $informe->setNroRemitente($unInforme[1]);
                $informe->setDenominacion($unInforme[2]);
                $informe->setFecha(\DateTime::createFromFormat('d/m/Y', $unInforme[0]));
  //              $informe->setDiasTranscurridos($unInforme[3]);
                $informe->setTipoAlerta($unInforme[3]);
                $informe->setEstado($unInforme[4]);
                $informe->setTipoComprobante($unInforme[5]);
                $informe->setMonto($unInforme[12]);
                $em->persist($informe);
                $em->flush();
    }else{
        
                $product->setDenominacion($unInforme[1]);
                $product->setFecha(\DateTime::createFromFormat('d/m/Y', $unInforme[2]));
                $product->setDiasTranscurridos($unInforme[3]);
                $product->setTipoAlerta($unInforme[4]);
                $product->setEstado($unInforme[5]);
                $product->setTipoComprobante($unInforme[6]);
                 $product->setMonto($unInforme[7]);
                $em->persist($product);
                $em->flush();
    }
                
            }
//            $response = new CSVResponse(array_map('str_getcsv',file('/tmp/'.$fileName)), 200, [] );
//$response->setFilename( "data.csv" );
//return $response;
//            $datos=array_map('str_getcsv',file('/tmp/'.$fileName));
//            $encabezado=$datos[0];          
//            unset($datos[0]);
//            foreach ($datos as $dato){
//                for($i=0;$i<sizeof($encabezado);$i++){
//                    $aux_Data['data'][$encabezado[$i]]=$dato[$i];
//                }
//                 $postData['data']['direcciones'][]=$aux_Data['data'];
//            }
           return $this->redirectToRoute('homepage', array('id' => $archivo->getId()));
           // return $this->render('AppBundle:Default:getDir.html.twig', array('data'=>$postData['data'],'encabezados'=>$encabezado));
        }

        return $this->render('archivos/new.html.twig', array(
            'archivo' => $archivo,
            'form' => $form->createView(),
        ));
    }

}
