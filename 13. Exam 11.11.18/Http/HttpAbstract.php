<?php
/**
 * Created by PhpStorm.
 * User: jorjomir
 * Date: 11/11/2018
 * Time: 10:45 AM
 */

namespace Http;


abstract class HttpAbstract
{
    protected function redirect(string $url)
    {
        header('Location: ' . $url);
        exit;
    }
}