1.For the changes of database username and password ===>>

Go to Application folder ---> config folder---> database.php

2.For the changes of email settings ===>>

Go to Application folder ---> config folder---> email.php

3.For changing the base path of your project ===>>

Go to Application folder ---> config folder---> config.php
    -find $config['base_url'] and set the base path of your project.

4.Some defined constants are there like EXIT_SUCCESS,EXIT_ERROR ===>>

Go to Application folder ---> config folder---> constants.php

5.There is one common library which is autoloaded in autoload.php which includes some common functions 
    -to check whether the particular value exist in table or not.
    -to check the recordId on the basis of multiple situations.
    -to generate random stings(includes characters and numbers).



->>This base module includes ===>>
1.signup
2.signin
3.change password
4.forgot password
5.resend otp
6.update profile

->>You can get the sql file of database and json of postman requests in Docs folder