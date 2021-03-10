<?php

class Pawn extends ChessBoard
{

    var $valid_moves = [];

    /**
     * Pawn Can move only 1 step at a time, in forward direction, vertically. Can also move 1 step forward diagonally, in order to eliminate a opposition piece
     * @param $strStartingMove
     * @return array
     */
    function GetMoves ($strStartingMove) {
        /*get row*/
        $row = parent::getRow($strStartingMove);

        /*get column index*/
        $col = parent::getColumn($strStartingMove);


        if ($col != 1 && $col != 8) {   /*checking if pawn is at the last position*/
            $this->valid_moves[] =  $this->row_letters[$row] . ($col + 1);
            $this->valid_moves[] =  $this->row_letters[$row] . ($col - 1);
        }

        return $this->valid_moves;
    }
}