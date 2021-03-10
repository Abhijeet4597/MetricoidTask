**Chessboard:**

The	chessboard	is	an	8	x 8	grid with	64	cells in	it.
With	8	rows	(A,	B,	C….	H)	and	8	columns	(1,	2,	3….	8),	each	cell	can	be	uniquely	
identified	with	its	cell number.	This	can	be	seen	illustrated	below. 

**Chess pieces and their movements**:

The game of chess has 6 unique types of pieces, with their own unique types of movements. These are: 

1.)  King – Can move only 1 step at a time in all 8 directions (horizontal, vertical and diagonal)

2.)  Queen – Can move across the board in all 8 directions

3.)  Bishop – Can move across the board only diagonally

4.)  Horse – Can move across the board only in 2.5 steps (2 vertical steps and 1 horizontal step)

5.)  Rook – Can move across the board only vertically and horizontally 

6.)  Pawn – Can move only 1 step at a time, in the forward direction, vertically. Can also move 1 step forward diagonally, in order to eliminate an opposing

**Possible Inputs and Outputs:**

    Input – The input string to your program will be the Type of chess piece and its Position (cell number) on the chessboard. E.g. “King D5”
    Output – Once you execute the program, the output will be a string of all possible cells in which the chess piece can move.
    
**Usage:** 

1. To get the pawn movement.
    
    `$pawn = new Pawn();`
    
    `$pawn->GetMoves("D5");`
    
2. To get the bishop movement.
    
    `$bishop = new Bishop();`
    
    `$bishop->GetMoves("D5");`

In this way you can get the possible moves of each pieces. Just you need to call the appropriate class and call `GetMoves` method of that clas.

Enjoy.

Abhijeet jaiswal
