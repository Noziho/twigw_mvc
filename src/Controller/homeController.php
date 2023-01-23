<?php

namespace App\Controller;


class homeController extends Controller
{
    public function home()
    {
        $this->render('home/home.html.twig', [
            'hobbies' => ['Ah', 'ça', 'oui', '!'],
            'smth' => ['1', '2', '3']
        ]);

    }
}