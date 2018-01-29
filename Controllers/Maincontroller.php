<?php namespace Controllers;

use Core\Lib\Controller;

class Maincontroller extends Controller
{

    public function index () {
        $a = 'hello from view method';

        return $this->view('Index_view', ['a' => $a]);

    }
}