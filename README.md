```
export PATH=${PATH}:/usr/local/mysql/bin
export PATH=${PATH}:/usr/local/mysql
```

#mysql_path

21-06-21

1./database/factories/UserFactory.php
change password value https://laravel.com/docs/8.x/hashing lib
use lib when login function run

2. add profiles function in User Model - using hasone relation ship (in profile table user_id field must be present )
3. retrive data all user data with profile table in json response using User::with('profile)-> method
