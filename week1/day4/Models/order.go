package Models

import (
	"freshers-bootcamp/week1/day4/Config"
	_ "github.com/go-sql-driver/mysql"
)
//GetAllUsers Fetch all user data
//func GetAllUsers(user *[]Store) (err error) {
//	if err = Config.DB.Find(user).Error; err != nil {
//		return err
//	}
//	return nil
//}
//CreateUser ... Insert New data
func CreateOrder(user *Order) (err error) {
	if err = Config.DB.Create(user).Error; err != nil {
		return err
	}
	return nil
}
////GetUserByID ... Fetch only one user by Id
//func GetProdByID(user *Store, id string) (err error) {
//	if err = Config.DB.Where("id = ?", id).First(user).Error; err != nil {
//		return err
//	}
//	return nil
//}
////UpdateUser ... Update user
//func UpdateProd(user *Store, id string) (err error) {
//	fmt.Println(user)
//	Config.DB.Table("user4").Where("id = ?", id).Update(user)
//	return nil
//}
////DeleteUser ... Delete user
//func DeleteUser(user *Store, id string) (err error) {
//	Config.DB.Where("id = ?", id).Delete(user)
//	return nil
//}

