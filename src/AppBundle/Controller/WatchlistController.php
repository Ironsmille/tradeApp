<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use AppBundle\Entity\Watchlist;

class WatchlistController extends Controller
{
    /**
    * @Route("/watchlist/create", name="watchlist" )
    * @method POST
    */
    public function createNewTickerAction(Request $request){
       $ticker = $request->request->get('ticker');
       $record = new Watchlist();
       $record->setTicker($ticker['ticker']);
       

       $em = $this->getDoctrine()->getManager();

       $em->persist($product);
       $em->flush();
       return new JsonResponse(['success'=>true]);
    }
}