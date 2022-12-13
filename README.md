# scode
 receipt Security code in custom type
get Verification code too easy with one line code

## Install
From your terminal:

```sh
composer require taymaz/scode
```

This starts to install scode package its working with composer so you can use it to easy.

## Basic use

in your app where you like add this part of code to get Verification code and use it .

### First require package
```sh
use Taymaz\Scode\Scode;
```

### then Add this code to get Verification code
this code going to return pin code like : 8456
```sh
Scode::pinCode()->apply();
```

####you can also get code with particular lentgh size :
```sh
Scode::pinCode()->size(4)->apply();
```
