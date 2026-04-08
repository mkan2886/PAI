<?php

require_once dirname(__FILE__).'/../config.php';

require_once _ROOT_PATH.'/lib/smarty/libs/Smarty.class.php';


$smarty = new Smarty();
$smarty->setTemplateDir(_ROOT_PATH.'/app');
$smarty->setCompileDir(_ROOT_PATH.'/templates_c');


$errors = array();
$kwota = null;
$oprocentowanie = null;
$lata = null;
$rata = null;


//przez referencje bo chcemy na orginalnych zmiennych 
function validate(&$kwota,&$oprocentowanie,&$lata,&$errors){


//$_REQUEST -> działa dla każdej metody? że dla post też 
    if(!isset($_POST["amount"]) || !isset($_POST["interest-rate"]) || !isset($_POST["years"]) ){

        //echo "nie podano param" -> kontroler nie ma nic wyświetlać 
        $errors[] = "nie podano param";

        //nie trzeba exit bo to kontroler
    }

   if(!empty($errors)) {return false; }
   // if(!\count($errors)) {return false; }


    $kwota = floatval($_POST['amount'] ?? 0);
    $oprocentowanie = floatval($_POST['interest-rate'] ?? 0);
    $lata = floatval($_POST['years'] ?? 0);


    if(!is_numeric($kwota) || !is_numeric($oprocentowanie) || !is_numeric($lata) ){

        //dziala jak append
        $errors[] = "wartosci nie sa liczbami";
        //nie trzeba exit bo to kontroler
    }

      //return !empty($errors);



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

$smarty->assign('app_url', _APP_URL);
$smarty->assign('root_path', _ROOT_PATH);
$smarty->assign('page_title', 'Calculator');
$smarty->assign('page_description', 'A calculator for calculating the credit rate');
$smarty->assign('page_header', 'Credit Calculator');
$smarty->assign('errors', $errors);
$smarty->assign('kwota', $kwota);
$smarty->assign('oprocentowanie', $oprocentowanie);
$smarty->assign('lata', $lata);
$smarty->assign('rata', $rata);

$smarty->display('calc_view.tpl');




