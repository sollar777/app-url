<?php

namespace App\Contracts\Url;

use Illuminate\Http\Request;

interface  UrlInterface
{
    public function getUrls();

    public function addUrl(Request $request);
}