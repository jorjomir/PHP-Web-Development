<?php
/**
 * Created by PhpStorm.
 * User: jorjomir
 * Date: 11/11/2018
 * Time: 10:45 AM
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
            $this->redirect('profile.php');
        } else {
            $this->template->render('home/index');
        }
    }



}