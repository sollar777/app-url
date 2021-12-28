<?php

namespace App\Contracts\Url;

use App\Models\Url;
use Illuminate\Http\Request;

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

    public function addUrl(Request $request)
    {
        $data = $request->all();

        if (!isset($data["full_url"]) or !filter_var($data["full_url"], FILTER_VALIDATE_URL)){
            $response = [
                "Error" => "URL inválida"
            ];
            return response()->json($response, 200);
        }

        $url_cod = substr(md5(microtime()), rand(0, 26), 5);

        $result = Url::where("full_url", $data["full_url"])->orWhere("url_cod", $url_cod)->first();
        if($result){
            $response = [
                "Error" => "Url ou código já cadastrado."
            ];
            return response()->json($response,200);
        }
        
        $base_url = Config('app.url');

        $response = Url::create([
            "url_full" => $data['full_url'],
            "url_cod" => $url_cod,
            "url_cut" => $base_url.'/api/'.$url_cod,
            "view" => 0
        ]);

        return response()->json($response,200);



    }
}
