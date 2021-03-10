<?php


class Bishop extends ChessBoard
{
    var $valid_moves = [];

    /**
     * Pawn Can move across the board only diagonally
     * @param $strStartingMove
     * @return array
     */
    function GetMoves($strStartingMove)
    {
        /*get row*/
        $row = parent::getRow($strStartingMove);

        /*get column index*/
        $col = parent::getColumn($strStartingMove);

        for ($i = $row; $i >= 0; $i--) {
            if ($col - $i > 0 && $col - $i != $col) {
                $this->valid_moves[] =  $this->row_letters[$row - $i] . ($col - $i);
            }
        }

        for ($i = 1; $i <= (8 - $col); $i++) {
            if (($row + $i) <= 8) {
                $this->valid_moves[] = $this->row_letters[$row + $i] . ($col + $i);
            }

        }

        for ($i = 1; $i <= $row; $i++) {
            if ($row - $i > 0) {
                $this->valid_moves[] = $this->row_letters[$row - $i] . ($col + $i);
            }
        }

        for ($i = 1; $i <= (8 - $row); $i++) {
            if (($col - $i) > 0) {
                $this->valid_moves[] = $this->row_letters[$row + $i] . ($col - $i);
            }

        }

        return $this->valid_moves;

    }

}