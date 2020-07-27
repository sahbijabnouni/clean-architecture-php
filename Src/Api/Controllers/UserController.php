<?php
namespace Api\Controllers;

use Psr\Http\Message\{
    ServerRequestInterface as Request,
    ResponseInterface as Response
};
use Core\Entities\User;
use Core\Application\Manager\UserManager;


class UserController
{
    private $userManager;
    public function __construct(UserManager $userManager)
    {
        $this->userManager=$userManager;
    }

    public function add(Request $request, Response $response)
    {
        $json = $request->getBody();

        $obj= json_decode($json);
        $user=new User($obj.id,$obj.firstName,$obj->lastName, $obj->email);
        $this->userManager->add($user);
        return $response->withStatus(201);
    }
    public function get(Response $response,$id)
    {
        $user=$this->userManager->find($id);
        $response->getBody()->write(json_encode($user));
        return $response;
    }
}