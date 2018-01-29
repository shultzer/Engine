<?php namespace Controllers;

use Core\Lib\Controller;
use Models\MainModel;

class Maincontroller extends Controller
{


    public function index ( $db ) {

        $data = MainModel::all($db);
        $a    = 'hello from view method';

        return $this->view('index_view', [
          'a' => $a,
            'data' =>$data]);

    }
}