<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        $data = [
            'course' => 'IT0049 Web System Technologies',
            'module' => 'Laravel Foundations',
        ];

        return view('pages.about', $data);
    }
}
