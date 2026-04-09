<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;

/**
 * HelloWorld built in Amelia - sample controller
 *
 * @author Przemysław Kudłacik
 */
class calc {
    
    public function action_calculate() {
		        
        $variable = 123;
        
        App::getMessages()->addMessage(new Message("Hello world message", Message::INFO));
        Utils::addInfoMessage("Or even easier message :-)");
        
        App::getSmarty()->assign("value",$variable);        
       # App::getSmarty()->display("Hello.tpl");


        $errors = array();
        $kwota = null;
        $oprocentowanie = null;
        $lata = null;
        $rata = null;


      
        function validate(&$kwota,&$oprocentowanie,&$lata,&$errors){


            if(!isset($_POST["amount"]) || !isset($_POST["interest-rate"]) || !isset($_POST["years"]) ){

                $errors[] = "nie podano param";

            }

        if(!empty($errors)) {return false; }



            $kwota = floatval($_POST['amount'] ?? 0);
            $oprocentowanie = floatval($_POST['interest-rate'] ?? 0);
            $lata = floatval($_POST['years'] ?? 0);


            if(!is_numeric($kwota) || !is_numeric($oprocentowanie) || !is_numeric($lata) ){

                $errors[] = "wartosci nie sa liczbami";

            }


            if(!empty($errors)) {return false; }


            $kwota = (float)$kwota;
            $oprocentowanie = (float)$oprocentowanie;
            $lata = (float)$lata;

            return true;

        }



        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (validate($kwota, $oprocentowanie, $lata, $errors)) {
                $r = $oprocentowanie / 12 / 100;
                $n = $lata * 12;

                if ($r == 0) {
                    $rata = $kwota / $n;
                } else {
                    $rata = ($kwota * $r * pow(1 + $r, $n)) / (pow(1 + $r, $n) - 1);
                }
            }
        }

        $conf = App::getConf();

        App::getSmarty()->assign('app_url', $conf->app_url);
        App::getSmarty()->assign('root_path', $conf->root_path);
        App::getSmarty()->assign('page_title', 'Calculator');
        App::getSmarty()->assign('page_description', 'A calculator for calculating the credit rate');
        App::getSmarty()->assign('page_header', 'Credit Calculator');

        App::getSmarty()->assign('errors', $errors);
        App::getSmarty()->assign('kwota', $kwota);
        App::getSmarty()->assign('oprocentowanie', $oprocentowanie);
        App::getSmarty()->assign('lata', $lata);
        App::getSmarty()->assign('rata', $rata);

        App::getSmarty()->display('calc_view.tpl');

                
    }
    
}
