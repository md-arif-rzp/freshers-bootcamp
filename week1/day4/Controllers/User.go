package Controllers

import (
	"fmt"
	"freshers-bootcamp/week1/day4/Models"
	"github.com/gin-gonic/gin"
	"net/http"
)
//GetUsers ... Get all users
func GetUsers(c *gin.Context) {
	var user []Models.Store
	err := Models.GetAllUsers(&user)
	if err != nil {
		c.AbortWithStatus(http.StatusNotFound)
	} else {
		c.JSON(http.StatusOK, user)
	}
}
//CreateUser ... Create User
func CreateProd(c *gin.Context) {
	var user Models.Store
	c.BindJSON(&user)
	err := Models.CreateProd(&user)
	if err != nil {
		fmt.Println(err.Error())
		c.AbortWithStatus(http.StatusNotFound)
	} else {
		c.JSON(http.StatusOK, user)
	}
}
//GetUserByID ... Get the user by id
func GetProdByID(c *gin.Context) {
	id := c.Params.ByName("id")
	var user Models.Store
	err := Models.GetProdByID(&user, id)
	if err != nil {
		c.AbortWithStatus(http.StatusNotFound)
	} else {
		c.JSON(http.StatusOK, user)
	}
}
//UpdateUser ... Update the user information
func UpdateProd(c *gin.Context) {
	var user Models.Store
	id := c.Params.ByName("id")
	fmt.Println(id)
	err := Models.GetProdByID(&user, id)
	if err != nil {
		c.JSON(http.StatusNotFound, user)
	}
	c.BindJSON(&user)
	err = Models.UpdateProd(&user, id)
	if err != nil {
		c.AbortWithStatus(http.StatusNotFound)
	} else {
		c.JSON(http.StatusOK, user)
	}
}
//DeleteUser ... Delete the user
func DeleteUser(c *gin.Context) {
	var user Models.Store
	id := c.Params.ByName("id")
	err := Models.DeleteUser(&user, id)
	if err != nil {
		c.AbortWithStatus(http.StatusNotFound)
	} else {
		c.JSON(http.StatusOK, gin.H{"id" + id: "is deleted"})
	}
}