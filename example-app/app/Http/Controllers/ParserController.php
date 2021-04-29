<?php

namespace App\Http\Controllers;

use App\Jobs\NewsParsing;
use App\Models\ParserSource;
use App\Services\ParserService;
use Illuminate\Http\Request;

class ParserController extends Controller
{
    public function __invoke(ParserService $service)
    {

        $rssLinks = ParserSource::select(['url'])->get();

        foreach ($rssLinks as $link) {
            NewsParsing::dispatch($link);
        }

        echo 'Спасибо за обращение!';
    }

}
