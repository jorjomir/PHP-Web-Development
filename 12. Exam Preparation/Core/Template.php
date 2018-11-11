<?php
/**
 * Created by PhpStorm.
 * User: jorjomir
 * Date: 11/8/2018
 * Time: 5:23 PM
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