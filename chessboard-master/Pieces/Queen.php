<?php

class Queen extends ChessBoard
{

    /**
     * Queen Can move across the board in all 8 directions
     * @param $strStartingMove
     * @return array
     */

    function GetMoves($strStartingMove)
    {
        $bishop = new Bishop();
        $bishopMoves = $bishop->GetMoves($strStartingMove);

        $rook = new Rook();
        $rookMoves = $rook->GetMoves($strStartingMove);

        $queenMoves = array_merge($bishopMoves, $rookMoves);

        return $queenMoves;

    }

}