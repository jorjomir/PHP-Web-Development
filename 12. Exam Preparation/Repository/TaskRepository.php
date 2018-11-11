<?php
/**
 * Created by PhpStorm.
 * User: jorjomir
 * Date: 11/7/2018
 * Time: 8:59 PM
 */

namespace Repository;


use Database\PDODatabase;
use DTO\TaskDTO;

class TaskRepository
{
    /**
     * @var PDODatabase
     */
    private $db;

    /**
     * UserRepository constructor.
     * @param PDODatabase $db
     */
    public function __construct(PDODatabase $db)
    {
        $this->db = $db;
    }

    public function insert(TaskDTO $task):bool {
        $stm=$this->db->query("
                INSERT INTO tasks (title, description, location, user_id, category_id, started_on, due_date) 
                VALUES (?,?,?,?,?,?,?)
            ");
        $stm->execute([
            $task->getTitle(),
            $task->getDescription(),
            $task->getLocation(),
            $task->getUserId(),
            $task->getCategory()->getCategoryId(),
            $task->getStartedOn(),
            $task->getDueDate(),
        ]);
        return true;
    }

    public function update(TaskDTO $task): void {
        $stm=$this->db->query('UPDATE tasks
            SET TITLE=:title,DESCRIPTION=:description,LOCATION=:location,USER_ID=:user_id,CATEGORY_ID=:category_id,
            STARTED_ON=:started_on,DUE_DATE=:due_date
            WHERE TASK_ID=:task_id');
        $stm->execute([
            'title'=>$task->getTitle(),
            'description'=>$task->getDescription(),
            'location'=>$task->getLocation(),
            'user_id'=>$task->getUserId(),
            'category_id'=>$task->getCategoryId(),
            'started_on'=>$task->getStartedOn(),
            'due_date'=>$task->getDueDate(),
            'task_id'=>$task->getTaskId(),
        ]);
    }
    public function delete(int $task_id) {
        $stm=$this->db->query('DELETE FROM tasks WHERE TASK_ID=:task_id');
        $stm->execute(['task_id'=>$task_id,]);
    }

    /**
     * @param int $user_id
     * @return \Generator|TaskDTO[]
     */
    public function getAll(int $user_id): \Generator{
        $stm=$this->db->query('SELECT TASK_ID,TITLE,DESCRIPTION,LOCATION,USER_ID,CATEGORY_ID,STARTED_ON,DUE_DATE, USERNAME, CAT.NAME CATEGORY_NAME
            FROM tasks 
            INNER JOIN users USING (USER_ID)
            INNER JOIN categories CAT USING (CATEGORY_ID) 
            WHERE USER_ID= :user_id');
        $result=$stm->execute(['user_id'=>$user_id]);
        foreach ($result->fetch(TaskDTO::class) as $item) {
            yield $item;
        }
    }

}