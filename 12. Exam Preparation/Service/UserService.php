<?php
/**
 * Created by PhpStorm.
 * User: jorjomir
 * Date: 11/8/2018
 * Time: 4:10 PM
 */

namespace Service;


use Core\DataBinding;
use DTO\UserDTO;
use Repository\UserRepository;

class UserService
{
    /**
     * @var UserRepository
     */
    private $user_repository;

    /**
     * UserService constructor.
     * @param UserRepository $user_repository
     */
    public function __construct(UserRepository $user_repository)
    {
        $this->user_repository=$user_repository;
    }

    public function register(UserDTO $user, string $confirm_password){
        if($user->getPassword()!==$confirm_password) {
            throw new \Exception('Passwords did not match');
        }
        $user->setPasswordHash();

        return $this->user_repository->insert($user);
    }

    /**
     * @param $username
     * @param $password
     * @return int
     * @throws \Exception
     */
    public function login($username, $password)
    {
        $user=$this->user_repository->check($username);
        if(!$user) {
            throw new \Exception('Wrong username or pass');
        }
        if(!password_verify($password, $user->getPassword())) {
            throw new \Exception('Wrong username or pass');
        }
        return $user->getUserId();
    }
    public function get_current():UserDTO {
        if(!$_SESSION['user_id']) {
            return null;
        }
        return $this->user_repository->getOne($_SESSION['user_id']);
    }
}