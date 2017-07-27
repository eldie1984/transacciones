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
            for($i=1;$i<sizeof($datos);$i++){
                if (sizeof($datos[$i]) < 22){
                    $j=$i+1;
                    if (sizeof($datos[$j]) > 1){
                       $aux_arr= $datos[$j];
                    }else{
                       $aux_arr=explode(",",$datos[$j][0]); 
                    }
                    
                    while(strlen($aux_arr[0]) > 10){
                        $datos[$i][sizeof($datos[$i])-1]=$datos[$i][sizeof($datos[$i])-1].$aux_arr[0];
                        if (sizeof($aux_arr)==1){
                            unset($datos[$j]);
                            $j++;             
                        $aux_arr=explode(",",$datos[$j][0]);
                        }
                        
                    }
                    $datos[$i][sizeof($datos[$i])]=$aux_arr[1];
                            unset($datos[$j]);
                            $i=$j;
                }
            }
            foreach($datos as $unInforme){
//                die();
//                var_dump($unInforme[18]);
//                echo date_diff( \DateTime::createFromFormat('Y-m-d',date('Y-m-d', strtotime('third friday of '.date('F Y')))),\DateTime::createFromFormat('d/m/Y', '30/06/2017'))->format('%d');
//                        die();
                $product = $this->getDoctrine()
        ->getRepository(Informe::class)
        ->findOneBy(array('nroRemitente' => $unInforme[0]));

    if (!$product) {
        $informe = new Informe();
                $informe->setId($unInforme[21]);
                $informe->setNroRemitente($unInforme[0]);
                $informe->setDenominacion($unInforme[1]);
                $informe->setFecha(\DateTime::createFromFormat('d/m/Y', $unInforme[4]));
                $informe->setDiasTranscurridos(date_diff( \DateTime::createFromFormat('Y-m-d',date('Y-m-d', strtotime('third friday of '.date('F Y')))),\DateTime::createFromFormat('d/m/Y', $unInforme[4]))->format('%d'));
                $informe->setTipoAlerta($unInforme[6]);
                $informe->setEstado($unInforme[7]);
                $informe->setTipoComprobante($unInforme[9]);
                $informe->setMonto($unInforme[14]);
                $informe->setFechaCreacion(new \DateTime('now'));
                $informe->setFechaActualizacion(new \DateTime('now'));
                $em->persist($informe);
                //$em->flush();
    }else{
        $product->setFechaActualizacion(new \DateTime('now'));
                $product->setDiasTranscurridos(date_diff( \DateTime::createFromFormat('Y-m-d',date('Y-m-d', strtotime('third friday of '.date('F Y')))),\DateTime::createFromFormat('d/m/Y', $unInforme[4]))->format('%d'));
                $product->setEstado($unInforme[7]);
                $em->persist($product);
                
    }
                
            }
            $em->flush();
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
