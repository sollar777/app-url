<?php

namespace App\Http\Controllers;

use App\Contracts\Url\UrlInterface;
use Illuminate\Http\Request;

class UrlController extends Controller
{

    public function index(UrlInterface $url)
    {
        $urls = $url->getUrls();

        return response()->json($urls,200);
    }
}
