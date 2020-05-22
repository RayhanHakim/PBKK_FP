<?php
declare(strict_types=1);

class RekapController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        $this->view->users = Users::find();
    }

}

