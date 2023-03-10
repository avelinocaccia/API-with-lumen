<?php

namespace App\Http\Controllers;

use App\Services\Implementation\UserServiceImpl;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    private $userService;
    private $request;

    public function __construct(UserServiceImpl $userService, Request $request)
    {
        $this->userService = $userService;   
        $this->request = $request;
    }

    function createUser(){
        $response = response('',201);
        $this->userService->postUser($this->request->all());
        return $response;
    }

    function getListUser() {
        return response($this->userService->getUser());
    }


    function putUser(int $id){
        $response = response('', 202);
        $this->userService->putUser($this->request->all(), $id);
        return $response;
    }

    function deleteUser(int $id){
        $this->userService->delUser($id);
        return response('',204);
    }   


    function restoreUser(int $id){
        $this->userService->restoreUser($id);
        return response('',204);
    }

}
