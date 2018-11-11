<?php
/**
 * Created by PhpStorm.
 * User: jorjomir
 * Date: 11/7/2018
 * Time: 8:17 PM
 */

namespace DTO;


class TaskDTO
{
    /**
     * @var int
     */
    private $task_id;
    /**
     * @var string
     */
    private $title;
    /**
     * @var string
     */
    private $description;
    /**
     * @var string
     */
    private $location;
    /**
     * @var int
     */
    private $user_id;

    /**
     * @var \datetime
     */
    private $started_on;
    /**
     * @var \datetime
     */
    private $due_date;


    private $username;

    /**
     * @var CategoryDTO
     */
    private $category;



    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getLocation(): string
    {
        return $this->location;
    }

    /**
     * @param string $location
     */
    public function setLocation(string $location): void
    {
        $this->location = $location;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->user_id;
    }

    /**
     * @param int $user_id
     */
    public function setUserId(int $user_id): void
    {
        $this->user_id = $user_id;
    }


    public function getStartedOn()
    {
        return $this->started_on;
    }


    public function setStartedOn($started_on): void
    {
        $this->started_on = $started_on;
    }


    public function getDueDate()
    {
        return $this->due_date;
    }


    public function setDueDate($due_date): void
    {
        $this->due_date = $due_date;
    }

    /**
     * @return int
     */
    public function getTaskId(): int
    {
        return $this->task_id;
    }

    /**
     * @param int $task_id
     */
    public function setTaskId(int $task_id): void
    {
        $this->task_id = $task_id;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username): void
    {
        $this->username = $username;
    }

    /**
     * @return CategoryDTO
     */
    public function getCategory(): CategoryDTO
    {
        return $this->category;
    }

    /**
     * @param CategoryDTO $category
     */
    public function setCategory(CategoryDTO $category): void
    {
        $this->category = $category;
    }

}