<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class RecipeController extends AbstractController
{
    #[Route('/recette/{slug}-{id}', name: 'recipe.show', requirements: ['slug' => '[a-zA-Z0-9-_]+'], methods: ['GET'])]
    public function index(Request $request): Response
    {

        dd($request->attributes->get('slug'), $request->attributes->get('id'));
    }
}
