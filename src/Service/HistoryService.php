<?php


namespace App\Service;


use App\Entity\History;
use App\Repository\HistoryRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HistoryService
{
    private $historyRepository;
    private $em;

    public function __construct
    (
        HistoryRepository $historyRepository,
        EntityManagerInterface $em
    )
    {
        $this->historyRepository = $historyRepository;
        $this->em = $em;
    }

    /**
     * Save a new entry Url in the database
     * @param Request $request
     * @return Response
     */
    public function saveUrl(Request $request) {
        $newRegistration = new History();
        $newRegistration->setUrl($request->getContent());
        $this->em->persist($newRegistration);
        $this->em->flush();
        return new Response('save done in BDD with data : '.$newRegistration->getUrl());
    }


    /**
     * Fetch the list of the Urls saved in the database
     * @return Response
     */
    public function listUrl() {
        $listUrls = $this->historyRepository->findAll();
        $responseUrls = [];
        foreach ($listUrls as $key=>$url) {
            $responseUrls[$key] = $url->getUrl();
        }
        return new Response(json_encode($responseUrls),
            Response::HTTP_OK,
            ['content-type' => 'json']
        );
    }


}
