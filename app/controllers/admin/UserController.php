<?php
namespace app\controllers\admin;

use fw\core\base\View;

class UserController extends AppController
{

    public function indexAction(){
        View::setMeta('Admin panel :: Главная','Description Admin panel');
        $test = "Test var";
        $data = ['test',2];

//        $this->set(['test' => $test,'data' => $data]);
        $this->set(compact('test','data'));

    }

    public function loginAction(){
        $this->layout = 'login';
    }

}