<?php
/**
 * Created by PhpStorm.
 * User: jorjomir
 * Date: 11/8/2018
 * Time: 8:22 PM
 */

namespace Service;


use Core\DataBinding;
use DTO\TaskDTO;
use Repository\TaskRepository;

class TaskService
{
    /**\
     * @var TaskRepository
     */
    private $task_repository;


    /**
     * TaskService constructor.
     * @param TaskRepository $task_repository
     */
    public function __construct(TaskRepository $task_repository)
    {
        $this->task_repository = $task_repository;
    }

    public function getList(int $user_id) {
        return $this->task_repository->getAll($user_id);
    }

    public function delete(int $task_id)
    {
        $this->task_repository->delete($task_id);
    }
    public function add(TaskDTO $task) {
        return $this->task_repository->insert($task);

    }
}