package Routes
import (
	"freshers-bootcamp/week1/day4/Controllers"
	"github.com/gin-gonic/gin"
)
//SetupRouter ... Configure routes
func SetupRouter() *gin.Engine {
	r := gin.Default()
	grp1 := r.Group("/user-api")
	{
		grp1.GET("products", Controllers.GetUsers)
		grp1.POST("product", Controllers.CreateProd)
		grp1.GET("product/:id", Controllers.GetProdByID)
		grp1.PATCH("product/:id", Controllers.UpdateProd)
		grp1.DELETE("product/:id", Controllers.DeleteUser)
		grp1.POST("order", Controllers.CreateOrder)
	}
	return r
}