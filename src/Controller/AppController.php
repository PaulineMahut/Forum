<?php

namespace App\Controller;

use App\Models\AbstractController;

final class AppController extends AbstractController
{

    public function index(): void
    {
        print_r($this->serialize(["Home" => "Hello World"], 'json'));
    }
}
