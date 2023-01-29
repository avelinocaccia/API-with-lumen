<?php

namespace App\Services\Interfaces;


interface UserServiceInterface{

    /**
     * @return array User
     */
    function getUser();
    /**
     * @param int $id
     * @return User
     */
    function getUserById(int $id);
    /**
     * @param array $user
     * @return void
     */
    function postUser(array $user);
    /**
     * @param array $user
     * @param int $id
     * @return void
     */
    function putUser(array $user, int $id);
    /**
     * @param int $id
     * @return boolean
     */
    function delUser(int $id);
    /**
     * @param int $id
     * @return boolean
     */
    function restoreUser(int $id );

}