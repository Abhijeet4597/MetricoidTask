<?php


include "autoload.php";
$moves = "";
$error = false;

if (!empty($_POST)) {


    $validaMoves = [];

    /*Validating the request*/
    if ($_POST['position'] == "" || strlen($_POST['position']) > 2) {
        $error = true;
        echo "hello";exit;
    }

    $position = strtoupper($_POST['position']);

    if($position[0] < 'A' || $position[0] > 'H') {
        $error = true;

    }

    if($position[1] < 1 || $position[1] > 8) {
        $error = true;

    }
    /*Validation over*/

    if (!$error) {

        $piece = strtolower($_POST['piece']);

        switch ($piece) {
            case "king":
                $king = new King();
                $validaMoves = $king->GetMoves($position);
                break;
            case "queen":
                $queen = new Queen();
                $validaMoves = $queen->GetMoves($position);
                break;
            case "bishop":
                $bishop = new Bishop();
                $validaMoves = $bishop->GetMoves($position);
                break;
            case "horse":
                $horse = new Horse();
                $validaMoves = $horse->GetMoves($position);
                break;
            case "rook":
                $rook = new Rook();
                $validaMoves = $rook->GetMoves($position);
                break;
            case "pawn":
                $pawn = new Pawn();
                $validaMoves = $pawn->GetMoves($position);
                break;
        }

        if (!empty($validaMoves)) {
            $moves = implode(", ", $validaMoves);
        }
    }


}

