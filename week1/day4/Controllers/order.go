package Controllers

import (
	"fmt"
	"freshers-bootcamp/week1/day4/Models"
	"github.com/gin-gonic/gin"
	//"log"
	"net/http"
)
//GetUsers ... Get all users
//func GetUsers(c *gin.Context) {
//	var user []Models.Order
//	err := Models.GetAllUsers(&user)
//	if err != nil {
//		c.AbortWithStatus(http.StatusNotFound)
//	} else {
//		c.JSON(http.StatusOK, user)
//	}
//}
//CreateUser ... Create User
func CreateOrder(c *gin.Context) {


	var user Models.Order
	c.BindJSON(&user)

	 //errr := Config.DB.Where("product_id = ?", user.Product_Id).First(user).Error
	 //
	 //fmt.Println( errr )





	err := Models.CreateOrder(&user)
	if err != nil {
		fmt.Println(err.Error())
		c.AbortWithStatus(http.StatusNotFound)
	} else {
		c.JSON(http.StatusOK, user)
	}
}
//GetUserByID ... Get the user by id
//func GetProdByID(c *gin.Context) {
//	id := c.Params.ByName("id")
//	var user Models.Order
//	err := Models.GetProdByID(&user, id)
//	if err != nil {
//		c.AbortWithStatus(http.StatusNotFound)
//	} else {
//		c.JSON(http.StatusOK, user)
//	}
//}
////UpdateUser ... Update the user information
//func UpdateProd(c *gin.Context) {
//	var user Models.Order
//	id := c.Params.ByName("id")
//	err := Models.GetProdByID(&user, id)
//	if err != nil {
//		c.JSON(http.StatusNotFound, user)
//	}
//	c.BindJSON(&user)
//	err = Models.UpdateProd(&user, id)
//	if err != nil {
//		c.AbortWithStatus(http.StatusNotFound)
//	} else {
//		c.JSON(http.StatusOK, user)
//	}
//}
////DeleteUser ... Delete the user
//func DeleteUser(c *gin.Context) {
//	var user Models.Order
//	id := c.Params.ByName("id")
//	err := Models.DeleteUser(&user, id)
//	if err != nil {
//		c.AbortWithStatus(http.StatusNotFound)
//	} else {
//		c.JSON(http.StatusOK, gin.H{"id" + id: "is deleted"})
//	}
//}