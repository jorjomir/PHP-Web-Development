<?php
/**
 * Created by PhpStorm.
 * User: jorjomir
 * Date: 11/8/2018
 * Time: 7:35 PM
 */

namespace Http;


use Core\Template;

class HomeHttp extends HttpAbstract
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

    public function index() {
        if(isset($_SESSION['user_id'])) {
            $this->redirect('dashboard.php');
        } else {
            $this->template->render('home/index');
        }
    }

}