<?php

namespace Database;


interface ResultSetInterface
{
    public function fetch($className= null): \Generator;
    public function getOne($className);
}