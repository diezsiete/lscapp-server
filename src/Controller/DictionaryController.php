<?php
/**
 * Created by PhpStorm.
 * User: guerrerojosedario
 * Date: 2018/04/05
 * Time: 4:09 PM
 */

namespace App\Controller;


use App\Entity\Word;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class DictionaryController extends Controller
{
    /**
     * @Route("/dictionary", name="dictionary_all", methods={"GET"})
     */
    public function all()
    {
        $videos = $this->getDoctrine()->getRepository(Word::class)->findAll();
        return new JsonResponse($videos);
    }

    /**
     * @Route("/dictionary/{id}", name="dictionary_word", methods={"GET"})
     */
    public function findWordById($id)
    {
        $video = $this->getDoctrine()->getRepository(Word::class)->find($id);
        return new JsonResponse(["video" => $video]);
    }
}