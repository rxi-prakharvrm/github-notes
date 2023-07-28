# PHP Security

___

## PHP Injection

<u>__Note:__</u> ```)' DROP Table '"; ```, if we write it in the username section and submit the form, it can delete the entile database. So it is a big security threat.

```php
$username = mysqli_real_escape_string($connection, $username);
$password = mysqli_real_escape_string($connection, $password);
```

It will clear all the special symbols from the input field. So that noone can write the commands inside the input field.

### Password Encruption

```php
$hashFormat = "$2y$10$";
$salt = "iusesomecrazystrings22";
$hashF_and_salt = $hashFormat . $salt;
$password = crypt($password, $hashF_and_salt);
```