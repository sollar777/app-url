<?php

namespace App\Contracts\Url;

use App\Models\Url;

class UrlConsumer implements UrlInterface
{
    private $url;

    public function __construct(Url $url)
    {
        $this->url = $url;
    }

    public function getUrls()
    {
        return $this->url->all();
    }
}
