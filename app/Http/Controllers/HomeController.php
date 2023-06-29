<?php

namespace App\Http\Controllers;

use App\Services\Math\Math;
use App\Services\Math\MathFacade;
use App\Services\Math\MathInterface;

class HomeController
{
    public function index(MathInterface $math)
    {
        //$result = MathFacade::sum(5, 6);
        $result = $math->sum(5, 6);

        return '<h1>Home page</h1>' . '<p>' . $result . '</p>';
    }

    public function sayHello(string $name = '')
    {
        $output = 'Hello ';
        if ($name) {
            $output .= $name;
        } else {
            $output .= 'World';
        }

        return $output;
    }

}
