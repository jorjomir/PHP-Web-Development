<?php
/**
 * Created by PhpStorm.
 * User: jorjomir
 * Date: 11/11/2018
 * Time: 10:53 AM
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
     * @param DataBinding $data_binder
     * @param Template $template
     */
    public function __construct(UserService $user_service, DataBinding $data_binder, Template $template)
    {
        $this->user_service = $user_service;
        $this->data_binder = $data_binder;
        $this->template = $template;
    }

    /**
     * @param array $data
     * @throws \Exception
     */
    public function register(array $data=[]) {
        if($data) {

            $user = $this->data_binder->bind($data, UserDTO::class);

            $this->user_service->register($user, $data['confirm_password']);

            $this->redirect('login.php');
        } else {
            $this->template->render('users/register');
        }
    }

    public function login(array $data)
    {
        if($data) {
            $user_id=$this->user_service->login($data['username'],$data['password']);
            $_SESSION['user_id']=$user_id;
            $this->redirect('profile.php');
        } else {
            $this->template->render('users/login');
        }
    }

    public function profile()
    {
        if(!isset($_SESSION['user_id'])) {
            $this->redirect('index.php');
        } else {
            $user=$this->user_service->get_current();

            $this->template->render('home/profile', $user);
        }
    }
}