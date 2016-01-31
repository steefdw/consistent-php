# Consistent PHP
==============

Confused by PHP's inconsistency? 
* Is it ($needle, $haystack) or ($haystack, $needle)? 
* str_replace() or strreplace()?

Consistent PHP is PHP package that tries to have a more readable and more consistent way of writing code in PHP.

Not `array_search($needle, $haystack)`, 
but `Arr($haystack)->seach($needle)`.

Not `str_replace($search, $replace, $string)` 
but `Str($string)->replace($search, $replace)`

**Note: this is more of a proof-of-concept, than a production ready package**
It works, but doesn't have all the string and array functions yet. Also no unit tests so far. So don't use this in production! (yet) 
### Usage example

#### Step 1 - make sure to include the composer autoload:
```php
require_once dirname(_ _DIR_ _) . '/vendor/autoload.php'; // Autoload files using Composer autoload
```
#### Step 2 - add this function in your bootstrap:
```php
if(function_exists('arr') === false)
{
    function Arr(&$array = [])
    {
        return new \Consistent\Arr($array);
    }
}
```
#### Step 3 - Done! You can use easy syntax like this:

##### Get the keys of an array
```php
    Arr($array)->keys();
```
##### Chunk the array in sets of 2, and preserve the keys
```php
    Arr($array)->chunk(2, true)
```    
##### Search the array for a value, and return the key
```php
    Arr($array)->search('value')
```    
### Version
Consistent PHP 0.2 
(not production ready!)

### Install with composer
Add `steefdw/consistent-php` to `composer.json`.
```
"steefdw/consistent-php": "dev-master"
```
Run `composer update` to pull down the latest version of this package.

Or run:
```
composer require steefdw/consistent-php
```
### Install manually

You can get the extension via Git:

    git clone https://github.com/steefdw/consistent-php.git

Or [download it as zip archive](https://github.com/steefdw/consistent-php/archive/master.zip).

### Wait, what... Composer? 
Please invest 15 minutes of your time today, to save days (or weeks!) of your time in the future. 
[Download Composer](http://getcomposer.org/download/) or see the [instructions](https://getcomposer.org/doc/00-intro.md) to get started.

If you're on Linux and know what the terminal is, here's the copy&paste guide:

##### Make sure you have curl installed:

    $ sudo apt-get install curl

##### Download Composer

    $ curl -sS https://getcomposer.org/installer | php
(Didn't work? ```sudo su``` might help)

##### Install globally (optional)

    $ mv composer.phar /usr/local/bin/composer

##### Check composer works

    $ composer -V

##### It didn't? Try making it writable:

    $ sudo chmod 777 /usr/local/bin/composer

### Development

Want to contribute? Great! Just send me a pull request.


License
----

MIT
