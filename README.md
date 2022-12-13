[![Latest Stable Version](http://poser.pugx.org/taymaz/scode/v)](https://packagist.org/packages/taymaz/scode)
[![Total Downloads](http://poser.pugx.org/taymaz/scode/downloads)](https://packagist.org/packages/taymaz/scode)
[![Latest Unstable Version](http://poser.pugx.org/arcaptcha/arcaptcha-php/v/unstable)](https://packagist.org/packages/taymaz/scode) [![License](http://poser.pugx.org/taymaz/scode/license)](https://packagist.org/packages/taymaz/scode)
[![PHP Version Require](http://poser.pugx.org/taymaz/scode/require/php)](https://packagist.org/packages/taymaz/scode)

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

you can also get code with particular lentgh size :
```sh
Scode::pinCode()->size(6)->apply();
```
