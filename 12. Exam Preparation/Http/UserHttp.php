<?php
/**
 * Created by PhpStorm.
 * User: jorjomir
 * Date: 11/8/2018
 * Time: 5:12 PM
 */

namespace Http;


use Core\DataBinding;
use Core\Template;
use DTO\UserDTO;
use Service\UserService;

class UserHttp extends HttpAbstract
{
    /**
     * @var UserService
     */
    private $user_service;

    /**
     * @var DataBinding
     */
    private $data_binder;

    /**
     * @var Template
     */
    private $template;

    /**
     * UserHttp constructor.
     * @param UserService $user_service
     * @param Template $template
     * @param DataBinding $data_binder
     */
    public function __construct(UserService $user_service, Template $template, DataBinding $data_binder)
    {
        $this->user_service = $user_service;
        $this->template=$template;
        $this->data_binder=$data_binder;
    }

    /**
     * @param array $data
     * @throws \Exception
     */
    public function register(array $data=[]) {
        if($data) {
            $user = $this->data_binder->bind($data, UserDTO::class);
            $this->user_service->register($user, $data['confirm_password']);
            $_SESSION['user_id']=$user;
            $this->redirect('success.php');
        } else {
            $this->template->render('users/register');
        }
    }

    public function login(array $data)
    {
        if($data) {
            $user_id=$this->user_service->login($data['username'],$data['password']);
            $_SESSION['user_id']=$user_id;
            $this->redirect('dashboard.php');
        } else {
            $this->template->render('users/login');
        }
    }

}