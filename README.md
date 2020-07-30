Basic PHP Register for any website, with an Argon2 Password Hashing system.

## Installation

**1.** Clone or download as ZIP the register and drop the content in the folder of your choice

**2.** Open **server.php** located in the **/php/** folder and edit the following code to make everything work well:
```php
$server = "SERVER_NAME";
$user = "USERNAME";
$pass = "PASSWORD";
$db = "DATABASE_NAME";
```
- SERVER_NAME = Server name (e.g. localhost or 127.0.0.1)
- USERNAME = Username that will be used to log into the server (e.g. root)
- PASSWORD = Password that will be used to log into the server
- DATABASE_NAME = Name of the database

**3.** If you have a little bit of MySQL knowledge, you should be done!

**NOTE:** If you wanna setup the database faster, you can import the **database.sql** file located in the **/sql/** folder
