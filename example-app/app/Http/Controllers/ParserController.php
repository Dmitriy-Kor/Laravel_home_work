<?php

namespace App\Http\Controllers;

use App\Services\ParserService;
use Illuminate\Http\Request;

class ParserController extends Controller
{
    public function __invoke(ParserService $service)
    {
        dd(app(ParserService::class)->setUrl('https://news.yandex.ru/music.rss')->parsing());
        //dd($service->setUrl('https://news.yandex.ru/army.rss')->parsing());
    }
}
