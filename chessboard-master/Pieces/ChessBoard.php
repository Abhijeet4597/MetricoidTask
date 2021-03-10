<?php


class ChessBoard
{

    var $row_letters, $row_numbers;
    var $row, $col;

    /**
     * ChessBoard constructor.
     */
    public function __construct()
    {
        $this->row_letters = array_combine(range(1, 8), range('A', 'H'));
        $this->row_numbers = array_flip($this->row_letters);
    }


    /**
     * @param $strStartingMove
     * @return mixed
     */
    function getRow($strStartingMove) {
        $this->row = $this->row_numbers[$strStartingMove[0]];
        return $this->row;
    }


    /**
     * @param $strStartingMove
     * @return mixed
     */
    function getColumn($strStartingMove) {
        $this->col = $strStartingMove[1];
        return $this->col;
    }

}