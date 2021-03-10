<?php


class Rook extends ChessBoard
{
    var $valid_moves = [];

    /**
     * Rook Can move across the board only vertically and horizontally
     * @param $strStartingMove
     * @return array
     */
    function GetMoves($strStartingMove)
    {
        /*get row*/
        $row = parent::getRow($strStartingMove);

        /*get column index*/
        $col = parent::getColumn($strStartingMove);

        foreach ($this->row_letters as $key => $value) {
            if ($key == $row) {
                for ($i = 1; $i <= 8; $i++) {
                    if ($i != $col)
                        $this->valid_moves[] = $value . $i;
                }
            }
            if ($key != $row)
                $this->valid_moves[] = $value . $col;

        }

        return $this->valid_moves;

    }

}