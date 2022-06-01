<?php

use Selective\BasePath\BasePathMiddleware;
use Slim\App;
use Slim\Middleware\ErrorMiddleware;


return function (App $app) {
    // Parse json, form data and xml
    $app->addBodyParsingMiddleware();

    // Add the Slim built-in routing middleware
    $app->addRoutingMiddleware();

    $app->add(BasePathMiddleware::class); // <--- here
    
    // Catch exceptions and errors
    $app->add(ErrorMiddleware::class); 

    $app->add(new Tuupola\Middleware\JwtAuthentication([
        "secure" => false,
        //"relaxed" => ["localhost", "workanaapidevs"],
        "path" => "/workanaapidevs/admin", /* or ["/api", "/admin"] */
        "header" => "X-Token", 
        "attribute" => "jwt", 
        "secret" => "supersecretkeyyoushouldnotcommittogithub",
        "algorithm" => "HS256", //, 
        "error" => function ($response, $arguments) {
            $data["status"] = "error";
            $data["message"] = $arguments["message"];
            return $response
                ->withHeader("Content-Type", "application/json")
                ->getBody()->write(json_encode($data, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT));
        }
    ]));

    $app->options('/{routes:.+}', function ($request, $response, $args) {
        return $response;
    });
    
    $app->add(function ($request, $handler) {
        $response = $handler->handle($request);
        return $response
                ->withHeader('Access-Control-Allow-Origin', 'http://localhost:8082')
                ->withHeader('Access-Control-Allow-Origin', 'http://localhost:8081')
                ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
                ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');
    });
};