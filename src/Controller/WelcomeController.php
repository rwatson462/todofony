<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WelcomeController
{
    #[Route('/')]
    public function __invoke(): Response
    {
        return new Response(
            content: json_encode([
                'todos' => [],
            ]),
            headers: [
                'content-type' => 'application/json',
            ]);
    }
}
