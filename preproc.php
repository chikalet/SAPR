<?php
session_start();

$static_conc   = intval($_POST['static_conc']);
$cruel         = intval($_POST['cruel']);
$length        = intval($_POST['length']);
$S             = intval($_POST['S']);
$elasticity    = intval($_POST['elasticity']);
$static_linear = intval($_POST['static_linear']);

//$arrayForProc = array ('static_conc' => $static_conc, 'cruel' => $cruel, 'length ' => $length, '$S' => $S, 'elasticity' => $elasticity, 'static_linear' => $static_linear);
//
//
//$text = "здесь текст";
//
//$file = "txtFiles/testFile.txt";
//
//file_put_contents($file, $arrayForProc);



$file = file_get_contents('txtFiles/a.json');

// Открыть файл data.json

$taskList = json_decode($file,TRUE);

unset($taskList);

$taskList[] = array('static_conc' => $static_conc, 'cruel' => $cruel, 'length' => $length, '$S' => $S, 'elasticity' => $elasticity, 'static_linear' => $static_linear);

file_put_contents('txtFiles/a.json',json_encode($taskList));

require_once('proc.html');

$_SESSION['message'] = 'ДАННЫЕ СОХРАНЕНЫ';