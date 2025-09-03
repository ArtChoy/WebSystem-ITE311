<?php

namespace App\Controllers;

class Test extends BaseController
{
    public function index()
    {
        return 'Test controller working! Current URL: ' . current_url();
    }
}
