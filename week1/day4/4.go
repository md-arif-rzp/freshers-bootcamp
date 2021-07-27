
package main

import (
	"fmt"
	"freshers-bootcamp/week1/day4/Config"
	"freshers-bootcamp/week1/day4/Models"
	"freshers-bootcamp/week1/day4/Routes"
	"github.com/jinzhu/gorm"
)
var err error
func main() {
	Config.DB, err = gorm.Open("mysql", Config.DbURL(Config.BuildDBConfig()))
	if err != nil {
		fmt.Println("Status:", err)
	}
	//defer Config.DB.Close()
	Config.DB.AutoMigrate(&Models.Store{}, &Models.Order{})
	r := Routes.SetupRouter()
	//running
	r.Run()
}
