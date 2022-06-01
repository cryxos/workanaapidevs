<?php

use Tuupola\Middleware\JwtAuthentication;
use Slim\Exception\HttpNotFoundException;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\Exception\NotFoundException;
use Firebase\JWT\JWT;
use Slim\App;
  

return function (App $main) {
    $main->group('/admin', function ($app) {
        $app->get('/users', \App\Action\UserListAction::class);
        $app->get("/log",  \App\Action\HomeAction::class)->setName('home');        
    });
    
    /** AUTH **/
    /************/    
    $main->post('/web/g/auth', \App\Action\Web\WebAuthModule::class);
    /** END **/

    $main->get('/', \App\Action\HomeAction::class)->setName('home');
     
    $main->post('/users', \App\Action\UserCreateAction::class);
   
    /** GUIA */
    $main->get('/guide', \App\Action\Guide\GuideListAction::class);
    $main->post('/guide', \App\Action\Guide\GuideCreateAction::class);
    $main->post('/guide/{id}', \App\Action\Guide\GuideAction::class);
    $main->delete('/guide/{id}', \App\Action\Guide\GuideDelete::class);
    $main->get('/guide/{path}', \App\Action\Guide\GuideGetAction::class);

    /** MODULO */
    $main->get('/module', \App\Action\Module\ModuleListAction::class);
    $main->post('/module', \App\Action\Module\ModuleCreateAction::class);
    $main->get('/module/{path}', \App\Action\Module\ModuleGetAction::class);
    $main->delete('/module/{id}', \App\Action\Module\ModuleDeleteAction::class);

    /** SECTION */
    $main->get('/section', \App\Action\Section\SectionListAction::class);
    $main->post('/section', \App\Action\Section\SectionCreateAction::class);
    $main->delete('/section/{id}', \App\Action\Section\SectionDeleteAction::class);

    /** IMAGEN */
    $main->get('/image', \App\Action\Image\ImageListAction::class);
    $main->post('/image', \App\Action\Image\ImageCreateAction::class);

    /** WEB **/
    /************/    
    //$main->post('/web/g/auth', \App\Action\Web\WebAuthModule::class);
    $main->get('/web/g/{pathguide}', \App\Action\Web\WebGetModule::class);   

    $main->map(['GET', 'POST', 'PUT', 'DELETE', 'PATCH'], '/{routes:.+}', function ($request, $response) {
        throw new HttpNotFoundException($request);
    });
};
