<?php

namespace App\Controller;

use App\Entity\History;
use App\Repository\HistoryRepository;
use App\Service\HistoryService;
use Doctrine\ORM\EntityManager;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Validator\Constraints\Json;

class HistoryController extends ApiController
{
    private $em;
    private $historyRepository;
    private $historyService;

    public function __construct
    (
        EntityManagerInterface $entityManager,
        HistoryRepository $historyRepository,
        HistoryService $historyService
    )
    {
        $this->em = $entityManager;
        $this->historyRepository = $historyRepository;
        $this->historyService = $historyService;
    }

    /**
     * @Route("/save_url")
     * @param Request $request
     * @return Response
     */
    public function saveUrl(Request $request) {
      return $this->historyService->saveUrl($request);
    }

    /**
     * @Route("/list_url")
     * @return Response
     */
    public function listUrl() {
        return $this->historyService->listUrl();
    }

    public function bookmarkVideo() {

    }

}

