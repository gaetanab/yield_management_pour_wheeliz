<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use AppBundle\Entity\periods;
use AppBundle\Entity\Types;
use AppBundle\Entity\Responses;
use AppBundle\Form\CalculateForm;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class CalculateController extends Controller
{
    /**
     * @Route("/", name="calculate")
     */
    public function calculateAction(Request $request)
    {
		$Responses = new Responses();
        
        $formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $Responses);
        
        $formBuilder
        ->add('size', IntegerType::class, [
			'label' => 'Taille du parc de voitures à proximité'
        ])
        ->add('number', IntegerType::class, [
			'label' => 'Nombre de voitures déjà réservées'
        ])
        ->add('dateStart', DateType::class, [
			'label' => 'Date début'
        ])
        ->add('dateEnd', DateType::class, [
			'label' => 'Date fin'
        ])
        ->add('validate', SubmitType::class, [
			'label' => 'Valider',
			'attr' => [
				'class' => 'btn',
			],
		])
        ;
        
        $form = $formBuilder->getForm();
        
        if($request->isMethod('POST')){
			$form->handleRequest($request);
			
			if($form->isValid()){
				// enregistrement en bdd
				//$em = $this->getDoctrine()->getManager();
				//$em->persist($Responses);
				//$em->flush();
				
				$ratio = ($Responses->getNumber()/$Responses->getSize())*100;
								
				// ajout des x% en fonction du ratio
				
				$nbToAdd = 0;
				
				for($i = 0; $i<100; $i+=10){
					if($ratio >= $i && $ratio <= ($i+10)){
						$nbToAdd = $i/1000; // /1000 pour l'avoir en pourcentage
						
						break;
					}
				}
				
				$periods = $this->getDoctrine()
				->getRepository('AppBundle:periods')
				->findAll();								
								
				$dateStartResp = $Responses->getDateStart()->format('Y-m-d');
				$dateEndResp = $Responses->getDateEnd()->format('Y-m-d');
								
				foreach($periods as $period){
					$dateStartPeriod = $period->getDateStart()->format('Y-m-d');
					$dateEndPeriod = $period->getDateEnd()->format('Y-m-d');
					
					// vérifie si les dates sont à cheval
					if((strtotime($dateStartResp) >= strtotime($dateStartPeriod) && 
					strtotime($dateStartResp) <= strtotime($dateEndPeriod)) || 
					(strtotime($dateEndResp) >= strtotime($dateStartPeriod) && 
					strtotime($dateEndResp) <= strtotime($dateEndPeriod))
					){
						// alors les dates sont à cheval
						$nbToAdd += ($period->getTypes()->getPercent())/100; // /100 pour l'avoir en pourcentage
						break;
					}
				}
				
				$result = 70*(1+$nbToAdd);
								
				return $this->render('calculate\index.html.twig',[
					'form' => $form->createView(),
					'result' => $result,
				]);
			}
		}
	   
	   return $this->render('calculate\index.html.twig',[
            'form' => $form->createView(),
            'result' => null,
        ]);
    }
}
