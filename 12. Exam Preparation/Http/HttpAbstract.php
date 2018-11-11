<?php
/**
 * Created by PhpStorm.
 * User: jorjomir
 * Date: 11/8/2018
 * Time: 7:38 PM
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