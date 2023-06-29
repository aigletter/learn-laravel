<?php

namespace App\Http\Controllers;

use App\Services\Math\Math;
use Illuminate\Cache\CacheManager;
use Illuminate\Support\Facades\App;

class MathController
{
    protected $math;

    public function __construct(Math $math)
    {
        $this->math = $math;
    }

    public function sum($a, $b)
    {
        /** @var CacheManager $cache */
        /*$cache = App::get('cache');
        $cache->delete('result');

        if ($cache->has('result')) {
            $result = $cache->get('result');
        } else {
            // Способ 1 - используя функцию-хелпер app
            $app = app();
            $math1 = $app->get('math');
            //$math2 = app('math');

            // Способ 2 - используя фасад App
            //$math3 = App::get('math');

            $math4 = $app->get('math');

            $result = $math1->sum($a, $b);

            $cache->put('result', $result);
        }*/

        $result = $this->math->sum($a, $b);
        return "Result $a + $b = " . $result;
    }
}
