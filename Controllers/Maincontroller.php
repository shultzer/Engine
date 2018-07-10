<?php namespace Controllers;

use Core\Lib\Controller;

class Maincontroller extends Controller
{


    public function index () {


        return $this->view('index_view');

    }

    public function remonline () {

        $res = NULL;
        if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' ) {
            $tel         = strip_tags(trim(preg_replace('![^0-9]+!', '',  $_POST[ 'tel' ])));
            $clientphone = "&client_phones[]=$tel";


            if ( $curl = curl_init() ) {
                curl_setopt($curl, CURLOPT_URL, 'https://api.remonline.ru/token/new');
                curl_setopt($curl, CURLOPT_REFERER, 'engine/');
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
                //curl_setopt($curl, CURLOPT_HEADER, TRUE);
                curl_setopt($curl, CURLOPT_POST, TRUE);
                curl_setopt($curl, CURLOPT_POSTFIELDS, "api_key=fea2824d00834c7e82439872b3190cbf");
                $out = curl_exec($curl);

                curl_close($curl);

                $out    = json_decode($out, TRUE);
                $token  = $out[ 'token' ];
                $fields = "token=" . $token;

            }

            $fields .= $clientphone;


            if ( $ch = curl_init() ) {
                curl_setopt($ch, CURLOPT_URL, 'https://api.remonline.ru/order/?' . $fields);
                curl_setopt($ch, CURLOPT_REFERER, 'engine/');
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

                $res = curl_exec($ch);

                curl_close($ch);
                $res = json_decode($res, TRUE);
                $res = $res[ 'data' ];
                //dump($res['data']);

            }

            //header("Location: {$_SERVER['REQUEST_URI']}");
        }

        return $this->view('remonline_view', ['data' => $res]);

    }


}