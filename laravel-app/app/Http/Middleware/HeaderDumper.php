<?php

namespace App\Http\Middleware;

use Closure;
use Psr\Log\LoggerInterface;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HeaderDumper
{

    private $logger;
    public function __construct(LoggerInterface $logger)
    {
        $this -> logger = $logger;
    }

    public function handle($request, Closure $next)
    {
        //$requestに対して条件を指定
        //return $next($request);を返す
        //リクエストヘッダのログを出力
        if ($request instanceof Request) {
            $this->logger->info('request',[
                'header' => strval($request->headers)
            ]);
            info('request', ['header' => strval($request->headers)]);
        }
        $response = $next($request);
        
        //$response = $next($request);に対して条件を指定
        //return $response;を返す
        //レスポンスヘッダのログを出力
        if($response instanceof Response){
            $this->logger->info('response',[
                'header' => strval($response->headers)
            ]);
        }
        return $response;
    }
}
