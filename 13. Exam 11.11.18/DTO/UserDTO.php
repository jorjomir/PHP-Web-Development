<?php
/**
 * Created by PhpStorm.
 * User: jorjomir
 * Date: 11/11/2018
 * Time: 9:31 AM
 */

namespace DTO;


class UserDTO
{
    /**
     * @var int
     */
    private $user_id;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $full_name;


    private $born_on;

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

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getFullName(): string
    {
        return $this->full_name;
    }

    /**
     * @param string $full_name
     */
    public function setFullName(string $full_name): void
    {
        $this->full_name = $full_name;
    }

    /**
     * @return mixed
     */
    public function getBornOn()
    {
        return $this->born_on;
    }

    /**
     * @param mixed $born_on
     */
    public function setBornOn($born_on): void
    {
        $this->born_on = $born_on;
    }



    public function setPasswordHash()
    {
        $this->password= password_hash($this->password, PASSWORD_DEFAULT);
    }
}