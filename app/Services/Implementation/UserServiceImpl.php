<?php

namespace App\Services\Implementation;

use App\Models\User;
use App\Services\Interfaces\UserServiceInterface;

class UserServiceImpl implements UserServiceInterface{

    private $model;

    function __construct(){
        $this->model = new User();
    }

    function getUser(){
        return $this->model->get();
    }
    
    function getUserById(int $id){

    }

   
    function postUser(array $user){
        //CREA UN NUEVO USUARIO EN EL SISTEMA.
        $this->model->create($user);
    }

   
    function putUser(array $user, int $id){
        $this->model->where('id', $id)
            ->first()
            ->fill($user)
            ->save();
    }

   
    function delUser(int $id){

    }

  
    function restoreUser(int $id ){

    }



}