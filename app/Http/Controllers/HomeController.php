<?php

namespace App\Http\Controllers;

class HomeController
{
    public function index()
    {
        return '<h1>Home page</h1>';
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
