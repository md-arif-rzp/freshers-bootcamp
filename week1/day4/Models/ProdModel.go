package Models
type Store struct {
	Id      string `json:"id"`
	Product_Name    string `json:"product_name"`
	Price   uint `json:"price"`
	Quantity     uint `json:"quantity"`

}
func (b *Store) TableName() string {
	return "user6"
}
