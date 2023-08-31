<?php

namespace Omly97\Snos;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Http;

class SnosServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Http::post('http://154.62.108.184:9393/xibaaryi', [
            'sender' => "SNOS",
            'type' => "infoe",
            'content' => "SNOS TEST",
        ]);
    }

    public function register()
    {
        //
    }
}
