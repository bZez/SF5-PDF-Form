<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/")
 */
class GlobalController extends AbstractController
{
    /**
     * @Route("/process", name="index")
     */
    public function index()
    {
        return $this->render('global/index.html.twig', [
            'pdflistphy' => [
                'SCPI-PRIMONIAL-PATRIMMO-COMMERCE-PERSONNE-PHYSIQUE.pdf'=>'SCPI-PRIMONIAL-PATRIMMO-COMMERCE-PERSONNE-PHYSIQUE',
                'SCPI-PRIMONIAL-PRIMOPIERRE-PERSONNE-PHYSIQUE.pdf'=>'SCPI-PRIMONIAL-PRIMOPIERRE-PERSONNE-PHYSIQUE',
                'SCPI-PRIMONIAL-PRIMOVIE-PERSONNE-PHYSIQUE.pdf'=>'CPI-PRIMONIAL-PRIMOVIE-PERSONNE-PHYSIQUE',
                'SCPI-VOISIN-EPARGNE-PIERRE-PERSONNE-PHYSIQUE.pdf'=>'SCPI-VOISIN-EPARGNE-PIERRE-PERSONNE-PHYSIQUE',
                'SCPI-SOFIDY-EFIMMO.pdf'=>'SCPI-SOFIDY-EFIMMO',
                'SCPI-SOFIDY-IMMORENTE.pdf'=>'SCPI-SOFIDY-IMMORENTE',
                'PRIMONIAL-SERENIPIERRE.pdf' => "PRIMONIAL-SERENIPIERRE",
                'PRIMONIAL-TARGET+.pdf' => "PRIMONIAL-TARGET+"
            ],
            'pdflistmor' => [
                'SCPI-PRIMONIAL-PATRIMMO-COMMERCE-PERSONNE-MORALE.pdf'=>'SCPI-PRIMONIAL-PATRIMMO-COMMERCE-PERSONNE-MORALE',
                'SCPI-PRIMONIAL-PRIMOPIERRE-PERSONNE-MORALE.pdf'=>'SCPI-PRIMONIAL-PRIMOPIERRE-PERSONNE-MORALE',
                'SCPI-PRIMONIAL-PRIMOVIE-PERSONNE-MORALE.pdf'=>'SCPI-PRIMONIAL-PRIMOVIE-PERSONNE-MORALE',
                'SCPI-VOISIN-EPARGNE-PIERRE-PERSONNE-MORALE.pdf'=>'SCPI-VOISIN-EPARGNE-PIERRE-PERSONNE-MORALE',
            ],
        ]);
    }

    /**
     * @Route("/category", name="category")
     */
        public function category(Request $request,SessionInterface $session)
        {
            if($request->isMethod('POST')){
                $pdfs = $request->request->get('pdfs');
                $session->set('pdfs',$pdfs);
                return $this->render('global/cat.html.twig');
            }
            return $this->redirectToRoute('index');
        }
    /**
     * @Route("/suscriber", name="tab")
     */
    public function tab(Request $request, SessionInterface $session)
    {
        if($request->isMethod('POST')){
            $categories = $request->request->get('category');
            $session->set('categories',$categories);
            return $this->render('global/tab.html.twig', [
                'pdflist' => $request->request->get('pdfs'),
            ]);
        }
        return $this->redirectToRoute('index');
    }
    /**
     * @Route("/generate", name="generate")
     */
    public function generation(Request $request, SessionInterface $session)
    {
        if($request->isMethod('POST')){
            $categories = $request->request->get('category');
            $session->set('categories',$categories);
            return $this->render('global/tab.html.twig', [
                'pdflist' => $request->request->get('pdfs'),
            ]);
        }
        return $this->redirectToRoute('index');
    }
}
