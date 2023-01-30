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



}
