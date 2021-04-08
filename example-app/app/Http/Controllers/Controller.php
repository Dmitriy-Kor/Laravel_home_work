<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @var array|string[]
     */
    protected array $newsList = [
        'News 1',
        'News 2',
        'News 3',
        'News 4',
        'News 5',
        'News 6',
        'News 7',
        'News 8',
        'News 9',
        'News 10'
    ];

    /**
     * @var array|string[]
     */
    protected  array $categoryList = [
        ['Top news', 'top.png'],
        ['Politics' , 'politics.jpeg'],
        ['Sport', 'sport.jpeg'],
        ['Economy', 'economic.jpeg'],
        ['Culture', 'culture.jpeg'],
    ];
}
