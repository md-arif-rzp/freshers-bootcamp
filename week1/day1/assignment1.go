package main

import "encoding/json"

type Matrix struct{
	rows int
	columns int
	elements [][]int
}

func MatrixInit(row, column int) Matrix { // Matrix Initialization
	var matrix Matrix
	matrix.rows = row
	matrix.columns = column
	vector := make([][]int, row)
	for i:=0; i<row; i++{
		vector[i] = make([]int, column)
	}
	matrix.elements = vector
	return matrix
}

func (matrix Matrix) GetNumberofRows() int { // Get number of rows of a matrix
	return matrix.rows
}

func (matrix Matrix) GetNumberofColumns() int { // Get number of columns of a matrix
	return matrix.columns
}

func (matrix *Matrix)  set(i, j, value int) { // Set element on a particular position
	matrix.elements[i][j] = value
}

func (FirstMatrix Matrix) add(SecondMatrix Matrix) Matrix { // Add two matrices
	row := FirstMatrix.rows
	column := FirstMatrix.columns
	FinalMatrix := FirstMatrix
	for i:=0; i<row; i++ {
		for j:=0; j<column; j++ {
			FinalMatrix.elements[i][j] += SecondMatrix.elements[i][j]
		}
	}
	return FirstMatrix
}

func main() {
	matrix1 := MatrixInit(3, 3)
	matrix2 := MatrixInit(3,3)
	for i:=0; i<3; i++{
		for j:=0; j<3; j++{
			matrix1.set(i, j, i+j)
			matrix1.set(i, j, 2*(i+j))
		}
	}

	matrix3 := matrix1.add(matrix2)

	m1, _ := json.Marshal(matrix1)
	m2, _ := json.Marshal(matrix2)
	m3, _ := json.Marshal(matrix3)
	println(m1)
	println(m2)
	println(m3)
}
