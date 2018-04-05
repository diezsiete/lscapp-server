<?php
/**
 * Created by PhpStorm.
 * User: guerrerojosedario
 * Date: 2018/04/05
 * Time: 4:09 PM
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/video", name="video_all")
     */
    public function videoAll()
    {
        $videos = [];

        return new JsonResponse(["videos" => $videos]);
    }

    /**
     * @Route("/video/{id}", name="video_one", methods={"GET"})
     */
    public function videoOne($id)
    {
        $video = "";
        return new JsonResponse(["video" => $video]);
    }
}