package main

import(
	"fmt"
	"math/rand"
)

func add(a ,b string ) (string,string ) {
	return b,a}



func main() {
	fmt.Println("My favorite number is", rand.Intn(100))
	x,y :=add("hello","world")
	fmt.Println(x,y)

}
