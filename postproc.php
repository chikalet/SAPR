<?php
session_start();
require_once('header.html');



    $file = file_get_contents('txtFiles/a.json');
    $data = json_decode($file, true);


    $static_conc = $data[0]['static_conc'];
    $cruel = $data[0]['cruel'];
    $length = $data[0]['length'];
    $S = $data[0]['$S'];
    $static_linear = $data[0]['static_linear'];

?>

<div class="med" style="margin-right: 300px; margin-left: 500px;">
    <p class="center">СТЕРЖЕНЬ №1</p>
    <table class="table table-white center" >
        <thead>
        <tr>
            <th scope="col">X</th>
            <th scope="col"><?php echo $static_conc;?></th>
            <th scope="col">X</th>
            <th scope="col">X</th>
            <th scope="col">X</th>
            <th scope="col">X</th>
            <th scope="col">X</th>
            <th scope="col">X</th>
            <th scope="col">X</th>
            <th scope="col">X</th>
            <th scope="col">X</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">N</th>
            <th scope="col"><?php echo $cruel;?></th>
            <th scope="col">N</th>
            <th scope="col">N</th>
            <th scope="col">N</th>
            <th scope="col">N</th>
            <th scope="col">N</th>
            <th scope="col">N</th>
            <th scope="col">N</th>
            <th scope="col">N</th>
            <th scope="col">N</th>
            <th scope="col">N</th>
        </tr>
        <tr>
            <th scope="row">U</th>
            <th scope="row"><?php echo  $length;?></th>
            <th scope="col">U</th>
            <th scope="col">U</th>
            <th scope="col">U</th>
            <th scope="row">U</th>
            <th scope="col">U</th>
            <th scope="col">U</th>
            <th scope="col">U</th>
            <th scope="row">U</th>
            <th scope="col"><?php echo $static_linear; ?></th>
            <th scope="col">U</th>
        </tr>
        <tr>
            <th scope="row">(b)</th>
            <th scope="row"><?php echo $S;?></th>
            <th scope="row">(b)</th>
            <th scope="col">(b)</th>
            <th scope="col">(b)</th>
            <th scope="col">(b)</th>
            <th scope="row">(b)</th>
            <th scope="row">(b)</th>
            <th scope="col">(b)</th>
            <th scope="col">(b)</th>
            <th scope="col">(b)</th>
            <th scope="col">(b)</th>
        </tr>
        </tbody>
    </table>
</div>

