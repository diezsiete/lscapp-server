<?php
/**
 * Created by PhpStorm.
 * User: guerrerojosedario
 * Date: 2018/04/05
 * Time: 4:09 PM
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController
{
    /**
     * @Route("/video")
     */
    public function videoAll()
    {
        return new Response('Retorna todos los videos');
    }

    /**
     * @Route("/video/{id}")
     */
    public function videoOne($id)
    {
        return new Response('Retorna un video ' . $id);
    }
}