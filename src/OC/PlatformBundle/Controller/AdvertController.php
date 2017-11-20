<?php

namespace OC\PlatformBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;



class AdvertController extends Controller
{
    public function indexAction()
    {
        $listAdverts = array(
            array(
              'title'   => 'Recherche développpeur Symfony',
              'id'      => 1,
              'author'  => 'Alexandre',
              'content' => 'Nous recherchons un développeur Symfony débutant sur Lyon. Blabla…',
              'date'    => new \Datetime()),
            array(
              'title'   => 'Mission de webmaster',
              'id'      => 2,
              'author'  => 'Hugo',
              'content' => 'Nous recherchons un webmaster capable de maintenir notre site internet. Blabla…',
              'date'    => new \Datetime()),
            array(
              'title'   => 'Offre de stage webdesigner',
              'id'      => 3,
              'author'  => 'Mathieu',
              'content' => 'Nous proposons un poste pour webdesigner. Blabla…',
              'date'    => new \Datetime())
          );
        return $this->render('OCPlatformBundle:Advert:index.html.twig',array('listAdverts' => $listAdverts));
    }

    public function viewAction($id){
        $advert = array(
            'title'   => 'Recherche développpeur Symfony2',
            'id'      => $id,
            'author'  => 'Alexandre',
            'content' => 'Nous recherchons un développeur Symfony2 débutant sur Lyon. Blabla…',
            'date'    => new \Datetime()
          );
        return $this->render('OCPlatformBundle:Advert:view.html.twig',
        array(
            'advert'=>$advert,
        ));
    }

    public function addAction(Request $request){
        return $this->render('OCPlatformBundle:Advert:add.html.twig');
    }

    public function menuAction($limit){

        $listAdverts = array(
            array('id' => 2, 'title' => 'recherche dev Symfony'),
            array('id' => 10, 'title' => 'missions de dev'),
            array('id' => 15, 'title' => 'offre de stage webdesigner')
        );

        return $this->render('OCPlatformBundle:Advert:menu.html.twig', array(
            'listAdverts' => $listAdverts
        ));
    }

    public function editAction($id, Request $request)
    {
      
      $advert = array(
        'title'   => 'Recherche développpeur Symfony',
        'id'      => $id,
        'author'  => 'Alexandre',
        'content' => 'Nous recherchons un développeur Symfony débutant sur Lyon. Blabla…',
        'date'    => new \Datetime()
      );
  
      return $this->render('OCPlatformBundle:Advert:edit.html.twig', array(
        'advert' => $advert
      ));
    }
}
