<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ApiController extends AbstractController
{
    #[Route('/api', name: 'app_api')]
    public function index(): JsonResponse
    {
        // je veux créer une api de caractéristiques des personnages de epic seven
        $character = [
            [
                'name' => 'Mario',
                'age' => '32',
                'job' => 'Plumber',
                'weapon' => 'Pipe',
                'power' => 'Super Mario',
                'color' => 'Red',
                'description' => 'Super Mario is a series of video games published by Nintendo for the Nintendo 64 platform. The series was originally released in Japan in November 1996, and was later ported to North America and Europe in early 1997. The series has been expanded to the GameCube and Wii platforms in North America and Europe, respectively, and has been re-released for the Wii U console in Japan in 2014.',
            ],
            [
                'name' => 'Link',
                'age' => '32',
                'job' => 'Swordman',
                'weapon' => 'Sword',
                'power' => 'Sword',
                'color' => 'Blue',
                'description' => '',
            ],
            [
                'name' => 'Zelda',
                'age' => '32',
                'job' => 'Swordman',
                'weapon' => 'Sword',
                'power' => 'Sword',
                'color' => 'Blue',
                'description' => '',
            ],
            [
                'name' => 'Samus',
                'age' => '32',
                'job' => 'Swordman',
                'weapon' => 'Sword',
                'power' => 'Sword',
                'color' => 'Blue',
                'description' => '',
            ],
            [
                'name' => 'Diddy Kong',
                'age' => '32',
                'job' => 'Swordman',
                'weapon' => 'Sword',
                'power' => 'Sword',
                'color' => 'Blue',
                'description' => '',
            ],
            [
                'name' => 'Captain Falcon',
                'age' => '32',
                'job' => 'Swordman',
                'weapon' => 'Sword',
                'power' => 'Sword',
                'color' => 'Blue',
                'description' => '',
            ],
            [
                'name' => 'Ice Climber',
                'age' => '32',
                'job' => 'Swordman',
                'weapon' => 'Sword',
                'power' => 'Sword',
                'color' => 'Blue',
                'description' => '',
            ],
            [
                'name' => 'Pikachu',
                'age' => '32',
                'job' => 'Swordman',
                'weapon' => 'Sword',
                'power' => 'Sword',
                'color' => 'Blue',
                'description' => '',
            ],
            [
                'name' => 'Jigglypuff',
                'age' => '32',
                'job' => 'Swordman',
                'weapon' => 'Sword',
                'power' => 'Sword',
                'color' => 'Blue',
                'description' => '',
            ],
            [
                'name' => 'Luigi',
                'age' => '32',
                'job' => 'Swordman',
                'weapon' => 'Sword',
                'power' => 'Sword',
                'color' => 'Blue',
                'description' => '',
            ],
            [
                'name' => 'Ness',
                'age' => '32',
                'job' => 'Swordman',
                'weapon' => 'Sword',
                'power' => 'Sword',
                'color' => 'Blue',
                'description' => '',
            ],
            [
                'name' => 'Peach',
                'age' => '32',
                'job' => 'Swordman',
                'weapon' => 'Sword',
                'power' => 'Sword',
                'color' => 'Blue',
                'description' => '',
            ],
            [
                'name' => 'Daisy',
                'age' => '32',
                'job' => 'Swordman',
                'weapon' => 'Sword',
                'power' => 'Sword',
                'color' => 'Blue',
                'description' => '',
            ],
            [
                'name' => 'Bowser',
                'age' => '32',
                'job' => 'Swordman',
                'weapon' => 'Sword',
                'power' => 'Sword',
                'color' => 'Blue',
                'description' => '',
            ],
            [
                'name' => 'Kirby',
                'age' => '32',
                'job' => 'Swordman',
                'weapon' => 'Sword',
                'power' => 'Sword',
                'color' => 'Blue',
                'description' => '',
            ],
            [
                'name' => 'Fox',
                'age' => '32',
                'job' => 'Swordman',
                'weapon' => 'Sword',
                'power' => 'Sword',
                'color' => 'Blue',
                'description' => '',
            ],
            [
                'name' => 'Pichu',
                'age' => '32',
                'job' => 'Swordman',
                'weapon' => 'Sword',
                'power' => 'Sword',
                'color' => 'Blue',
                'description' => '',
            ],
            [
                'name' => 'Jigglypuff',
                'age' => '32',
                'job' => 'Swordman',
                'weapon' => 'Sword',
                'power' => 'Sword',
                'color' => 'Blue',
                'description' => '',
            ],
        ];
        
        
        return $this->json($character);
    }
}
