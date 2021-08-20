## Api Contracts 

| Api  | Type | Request | Description |
| ------------- | ------------- | ------------- | ------------- |
| /api/createUser/  | POST  | {"UserName","UserEmail","MobileNo"} | Insert User in table |
| /api/ByUserName/{username} | GET  | {} | Get a user by their username |
| /api/ByUserEmail/{useremail} | GET  | {} | Get a user by their user email |
| /api/ByUserNo/{usernumber} | GET  | {} | Get a user by their user number |
| /api/allUsers | GET  | {} | Get all users |
