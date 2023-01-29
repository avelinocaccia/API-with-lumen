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
}
