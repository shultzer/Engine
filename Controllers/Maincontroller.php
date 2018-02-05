<?php namespace Controllers;

use Core\Lib\Controller;
use Models\MainModel;

class Maincontroller extends Controller
{


    public function index ( $db ) {


        return $this->view('index_view');

    }
}