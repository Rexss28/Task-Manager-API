<?php

namespace App\Controller;

use App\Entity\Task;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class TaskCompleteController extends AbstractController
{
    public function __invoke(Task $data, EntityManagerInterface $em)
    {
        $data->setCompleted(true);
        $em->flush();

        return new JsonResponse(['status' => 'ok']);
    }
}
