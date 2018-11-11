<?php
/**
 * Created by PhpStorm.
 * User: jorjomir
 * Date: 11/11/2018
 * Time: 10:43 AM
 */

namespace Core;


class Template
{
    private const TEMPLATE_PATH='Templates/';
    private const TEMPLATE_SUFFIX='.php';
    public function render(string $template_name, $data=[]) {
        include (self::TEMPLATE_PATH.$template_name.self::TEMPLATE_SUFFIX);
    }
}