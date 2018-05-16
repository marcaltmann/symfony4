<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LuckyController extends Controller
{
    /**
     * @Route("/lucky/number/{max}", name="app_lucky_number")
     */
    public function number($max)
    {
        $number = mt_rand(0, $max);

        $url = $this->generateUrl('app_lucky_number', array('max' => 5));

        return $this->redirectToRoute('test');

        // return new Response(
        //     '<html><body><p>Lucky number: '.$number.'</p><p>Url: '.$url.'</p></body></html>'
        // );
    }
}
