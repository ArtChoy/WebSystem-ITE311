<?php
namespace App\Controllers;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Welcome to LMS',
            'description' => 'Your Learning Management System'
        ];
        return view('index', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Us',
            'description' => 'Learn more about our Learning Management System'
        ];
        return view('about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
            'description' => 'Get in touch with us'
        ];
        return view('contact', $data);
    }
}
