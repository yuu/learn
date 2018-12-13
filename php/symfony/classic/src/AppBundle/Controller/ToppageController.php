<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ToppageController extends Controller
{
    /**
     * @Route("/")
     */
    public function IndexAction()
    {
        $information = '5月と6月の公演情報を追記しました。';
        return $this->render('Toppage/index.html.twig', array('information' => $information));
    }
}
