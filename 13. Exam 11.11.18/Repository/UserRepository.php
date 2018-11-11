<?php
/**
 * Created by PhpStorm.
 * User: jorjomir
 * Date: 11/11/2018
 * Time: 9:40 AM
 */

namespace Repository;


use Database\PDODatabase;
use DTO\UserDTO;

class UserRepository
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
    public function insert(UserDTO $user) {
        $stm=$this->db->query('INSERT INTO users (USERNAME,PASSWORD,FULL_NAME, BORN_ON)
                                VALUES (:username, :password, :full_name, :born_on)');
        $stm->execute(['username' => $user->getUsername(),
            'password' => $user->getPassword(),
            'full_name' => $user->getFullName(),
            'born_on' => $user->getBornOn()]);
        return $this->db->lastInsertId();
    }

    public function check(string $username) :UserDTO{
        $stm= $this->db->query('SELECT USER_ID,USERNAME,FULL_NAME,PASSWORD, BORN_ON FROM users 
                                      WHERE USERNAME= :username');
        $result=$stm->execute(['username' => $username]);
        return $result->getOne(UserDTO::class);
    }
    public function getOne(int $user_id) {
        $stm= $this->db->query('SELECT USER_ID,USERNAME,PASSWORD,FULL_NAME,BORN_ON FROM users 
                                      WHERE USER_ID= :user_id');
        $result=$stm->execute(['user_id' => $user_id]);
        return $result->getOne(UserDTO::class);
    }

}