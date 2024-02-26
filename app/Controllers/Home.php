<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Kostpedia'
        ];

        return view('home', $data);
    }
    public function about()
    {
        $data = [
            'title' => 'About Us | Kostpedia'
        ];
        return view('about', $data);
    }
    public function contact()
    {
        $data = [
            'title' => 'Contact | Kostpedia'
        ];
        return view('contact', $data);
    }
    public function faq()
    {
        $data = [
            'title' => 'FAQ | Kostpedia'
        ];
        return view('faq', $data);
    }
}
