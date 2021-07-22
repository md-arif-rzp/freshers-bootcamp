package main

import (
	"fmt"
	"sync"
	"time"
	"math/rand"
)


func main(){

	var t_rating float64

	var wait_grp sync.WaitGroup

	for i:=1;i<=200;i++{

		go func() {
			wait_grp.Add(1)

			t_rating+=rating(&wait_grp)


		}()
	}
    wait_grp.Wait()
	fmt.Println(t_rating/200)

}

func rating(wait_grp *sync.WaitGroup) float64{

	defer wait_grp.Done()

	r_time:=rand.Intn(10)
	time.Sleep(time.Duration(r_time)*time.Second)

	rating:= rand.Intn(10)
	fmt.Println(rating)
	return float64(rating)


}