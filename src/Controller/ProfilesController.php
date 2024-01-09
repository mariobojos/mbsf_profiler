<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfilesController extends AbstractController
{
    #[Route('/profiles', name: 'app_profiles')]
    public function index(): Response
    {
        $profiles = [
            [
                'id' => 1,
                'name' => 'Adan',
                'age' => 30
            ],
            [
                'id' => 2,
                'name' => 'Bob',
                'age' => 27
            ],
            [
                'id' => 3,
                'name' => 'Carla',
                'age' => 19
            ]
        ];
        return $this->render('profiles/index.html.twig', [
            'profiles' => $profiles,
        ]);
    }

    #[Route('/show/{id}', name:'app_profiles_show', defaults: ['id' => null], methods: ['GET', 'HEAD'])]
    public function show($id): Response
    {
        return $this->json([
            'id' => $id,
            'path' => 'src/Controller/ProfilesController.php',
            'method' => 'show()',
        ]);
    }
}
