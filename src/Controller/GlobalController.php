<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/a")
 */
class GlobalController extends AbstractController
{
    /**
     * @Route("/process", name="index")
     */
    public function index()
    {
        return $this->render('global/index.html.twig', [
            'pdflist' => ['primopierrebs'=>'SCPI PRIMONIAL PRIMOPIERRE PERSONNE PHYSIQUE BS'],
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
