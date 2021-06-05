<?php 

namespace Serakoi\HideProfile;

use Laminas\Diactoros\Response\HtmlResponse;
use Laminas\Diactoros\Response\JsonResponse;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Server\RequestHandlerInterface;

class GetHiddenUsersController implements RequestHandlerInterface {
    public function handle(Request $request): Response
    {
        return new JsonResponse(array(
            'test' => true
        ), 200);
    }
}