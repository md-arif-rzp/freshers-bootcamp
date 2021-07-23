//package main
//import "github.com/gin-gonic/gin"
//import "net/http"
////
////func hello(w http.ResponseWriter, req *http.Request) {
////
////	fmt.Fprintf(w, "hello")
////}
////
////func headers(w http.ResponseWriter, req *http.Request) {
////
////	for name, headers := range req.Header {
////		for _, h := range headers {
////			fmt.Fprintf(w, "%v: %v\n", name, h)
////		}
////	}
////}
//func newfunc(c *gin.Context){
//
//	c.JSON(200,gin.H{
//		"msgg":"ok",
//	})
//
//}
//func main() {
//
//	//server:=gin.Default()
//	//
//	//server.GET("/test", func(ctx *gin.Context) {
//	//	ctx.JSON(200,gin.H{
//	//		"message" : "ok!!",
//	//	})
//	//})
//	//
//	//
//	//
//	//
//	//server.Run(":8080")
//	//
//
//
//
//	router := gin.Default()
//
//
//	router.GET("/users/", newfunc)
//	// This handler will match /user/john but will not match /user/ or /user
//	router.GET("/user/:name", func(c *gin.Context) {
//		name := c.Param("name")
//		c.String(http.StatusOK, "Hello %s", name)
//	})
//
//
//
//	router.Run(":8000")
//}



package main
import (
	"freshers-bootcamp/week1/day3/Config"
	"freshers-bootcamp/week1/day3/Models"
	"freshers-bootcamp/week1/day3/Routes"
	"fmt"
	"github.com/jinzhu/gorm"
)
var err error
func main() {
	Config.DB, err = gorm.Open("mysql", Config.DbURL(Config.BuildDBConfig()))
	if err != nil {
		fmt.Println("Status:", err)
	}
	//defer Config.DB.Close()
	Config.DB.AutoMigrate(&Models.User{})
	r := Routes.SetupRouter()
	//running
	r.Run()
}
