package Models


type Order struct {
	Id    uint `json:"id"`
	Customer_Id     string `json:"customer_id"`
	Product_Id     string `json:"product_id"`
	Quantity        uint `json:"quantity"`
	Status     string `json:"status"`
}


func (a *Order) TableName() string {
	return "user7"
}