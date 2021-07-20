package main

import(
	"fmt"
	"math/rand"
)

func add(a ,b string ) (string,string ) {
	return b,a}
func ruuc(x int ) int {
	if x==0 {return 1}

	return x * ruuc(x-1)
}


func main() {
	fmt.Println("My favorite number is", rand.Intn(100))
	x,y :=add("hello","world")
	fmt.Println(x,y)

	fmt.Println(ruuc(7))

}
