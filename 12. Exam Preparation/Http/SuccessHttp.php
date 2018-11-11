<?php
/**
 * Created by PhpStorm.
 * User: jorjomir
 * Date: 11/9/2018
 * Time: 2:58 PM
 */

namespace Http;


use Core\Template;

class SuccessHttp extends HttpAbstract
{
    /**
     * @var Template
     */
    protected $template;

    /**
     * HomeHttp constructor.
     * @param Template $template
     */
    public function __construct(Template $template)
    {
        $this->template = $template;
    }

    public function success() {
            $this->template->render('home/success');
    }

}