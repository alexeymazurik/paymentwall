Paymentwall Task
===============

Deploy
-------
To deploy this project on local machine you should have installed Apache and MySQL

In config file (config/config.php) you should change site-prefix for your machine (e.g. "http://localhost/~username/php_merchant")

To config database connection change *DB* settings in config/db.php.

To add pre-settings for your database copy config/seed.sql to your DB.

Explanation
--------

Merchant have his DB Merchant with some logic.

To get pinbacks from paymentwall you should run php script pw_script/index.php.
It collects info from GET query and edit user params. SIGNATURE is very useful thing to prevent some strange actions.




