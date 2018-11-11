<?php
/**
 * Created by PhpStorm.
 * User: jorjomir
 * Date: 11/8/2018
 * Time: 8:21 PM
 */

namespace Http;


use DTO\CategoryDTO;
use DTO\EditDTO;
use Core\DataBinding;
use Core\Template;
use DTO\TaskDTO;
use Service\CategoryService;
use Service\TaskService;
use Service\UserService;

class TaskHttp extends HttpAbstract
{
    /**
     * @var Template
     */
    private $template;

    /**
     * @var TaskService
     */
    private $task_service;

    /**
     * @var DataBinding
     */
    private $data_binder;
    /**
     * @var UserService
     */
    private $user_service;


    /**
     * TaskHttp constructor.
     * @param Template $template
     * @param TaskService $task_service
     * @param UserService $user_service
     * @param DataBinding $data_binder
     */
    public function __construct(Template $template, TaskService $task_service, UserService $user_service, DataBinding $data_binder)
    {
        $this->template = $template;
        $this->task_service=$task_service;
        $this->user_service=$user_service;
        $this->data_binder=$data_binder;
    }
    public function dashboard() {
        $user=$this->user_service->get_current();

        if(!$user) {
            $this->redirect('login.php');
        }
        $data= $this->task_service->getList($user->getUserId());
        $this->template->render('task/index', $data);
    }

    public function delete(array $data)
    {
        if(!isset($data['task_id'])) {
            throw new \Exception('No Task ID');
        }
        $this->task_service->delete($data['task_id']);
        $this->redirect('dashboard.php');
    }


    public function add(array $data, CategoryService $category_service) {
        /** @var TaskDTO $task */
        $task = $this->data_binder->bind($data, TaskDTO::class);
        $editDTO=new EditDTO();
        $editDTO->setTask($task);
        $editDTO->setCategories($category_service->getAll());
        if(isset($data['save'])) {


            $author = $this->user_service->get_current();
            /** @var CategoryDTO $category */
            $category = $category_service->getOne(intval($data['category_id']));
            $name=$author->getUsername();
            $id=$author->getUserId();

            $task->setCategory($category);
            $task->setUserId($id);
            $task->setUsername($name);
            try {
                $this->task_service->add($task);
                $this->redirect("dashboard.php");
            } catch (\Exception $e) {
                echo $e->getMessage();
            }
        } else {
            $this->template->render('task/create', $editDTO);
        }
    }

}