<?php

class Horse extends ChessBoard
{
    var $valid_moves = [];

    /**
     * Horse Can move across the board only in 2.5 steps (2 vertical steps and 1 horizontal step)
     * @param $strStartingMove
     * @return array
     */
    function GetMoves($strStartingMove)
    {
        /*get row*/
        $row = parent::getRow($strStartingMove);

        /*get column index*/
        $col = parent::getColumn($strStartingMove);

        $valid_moves = [];

        foreach (array(1 => 2, 2 => 1) as $r => $c)
            foreach (array(-1, 1) as $r_sign)
                foreach (array(-1, 1) as $c_sign) {
                    $pos = $col + $c * $c_sign;
                    if ($pos > 0) {
                        $letterPos = $row + $r * $r_sign;
                        if ($letterPos > 0)
                            $this->valid_moves[] = $this->row_letters[$row + $r * $r_sign] . ($col + $c * $c_sign);
                    }

                }

        return $valid_moves;
    }

}