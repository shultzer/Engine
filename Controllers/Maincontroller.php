<?php namespace Controllers;

use Core\Lib\Controller;
use Models\MainModel;

class Maincontroller extends Controller
{


    public function index ( $db ) {

       // $arr = MainModel::gettable()::where([]);
        //$a    = 'Hello from view method';

        return $this->view('index_view');

    }
}