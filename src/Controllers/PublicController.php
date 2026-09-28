<?php

namespace App\Controllers;

class PublicController
{
    public function index()
    {
        $title = 'World';

        $posts = [
            [
                'title' => 'Some world title 1',
                'content' => 'Some world content 1',
                'date' => 'January 1, 2021',
                'author' => 'Mirell',
            ],
            [
                'title' => 'Some world title 2',
                'content' => 'Some world content 2',
                'date' => 'January 2, 2021',
                'author' => 'Juss',
            ],
            [
                'title' => 'Some world title 3',
                'content' => 'Some world content 3',
                'date' => 'January 3, 2021',
                'author' => 'Alex',
            ],
            [
                'title' => 'Some world title 4',
                'content' => 'Some world content 4',
                'date' => 'January 4, 2021',
                'author' => 'Billie Eilish',
            ],
        ];
        view('index', compact('title', 'posts'));
    }

    public function us()
    {
        $title = 'U.S';
        $posts = [
            [
                'title' => 'Some U.S title 1',
                'content' => 'Some U.S content 1',
                'date' => 'January 1, 2021',
                'author' => 'Mirell',
            ],
            [
                'title' => 'Some U.S title 2',
                'content' => 'Some U.S content 2',
                'date' => 'January 2, 2021',
                'author' => 'Juss',
            ],
            [
                'title' => 'Some U.S title 3',
                'content' => 'Some U.S content 3',
                'date' => 'January 3, 2021',
                'author' => 'Alex',
            ],
            [
                'title' => 'Some U.S title 4',
                'content' => 'Some U.S content 4',
                'date' => 'January 4, 2021',
                'author' => 'Billie Eilish',
            ],
        ];
        view('us', compact('title', 'posts'));
    }

   public function tech()
{
    $title = 'Technology';

    $posts = [
        [
            'title' => 'Technology News',
            'content' => 'This is my technology article.',
            'date' => 'September 22, 2026',
            'author' => 'Mirell',
        ],
    ];

    view('tech', compact('title', 'posts'));
}
}