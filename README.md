# Laracademy Generators

[![Latest Stable Version](https://poser.pugx.org/laracademy/commands.make-user/v/stable)](https://packagist.org/packages/laracademy/commands.make-user) [![Total Downloads](https://poser.pugx.org/laracademy/commands.make-user/downloads)](https://packagist.org/packages/laracademy/commands.make-user) [![Latest Unstable Version](https://poser.pugx.org/laracademy/commands.make-user/v/unstable)](https://packagist.org/packages/laracademy/commands.make-user) [![License](https://poser.pugx.org/laracademy/commands.make-user/license)](https://packagist.org/packages/laracademy/commands.make-user)

**Laracademy `make:user` Command** - provides you a simplistic artisan command to generate users from the console.

**Author(s):**
* [Laracademy](https://laracademy.co) ([@laracademy](http://twitter.com/laracademy), michael@laracademy.co)

## Requirements

1. PHP 5.6+
2. Laravel 5.2+

## Usage

### Step 1: Install through Composer

```
composer require "laracademy/commands.make-user"
```

### Step 2: Add the Service Provider
The easiest method is to add the following into your `config/app.php` file

```php
Laracademy\Make\MakeServiceProvider::class
```

### Step 3: Artisan Command
Now that you have successfully installed the package you can run `php artisan`. You should now see an option for `make:user`

```
make:user [options] [--] <email>
```

### Valid Options
 - name
   - This is the name you would like to assign to the user, if not supplied the email address will be used.
 - password
   - This is thte password you would like to assign to the user, if not supplied a random 8 characters will be used.

## Examples
### Generating a random user
```
php artisan make:user support@laracademy.co
```

### Assigning the user's name when generating their account
```
php artisan make:user support@laracademy.co --name=Mickey
```

### Assigning the user's password when generating their account
```
php artisan make:user support@laracademy.co --password=Y
```

## License
ModelGen is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)

### Bug Reporting and Feature Requests
Please add as many details as possible regarding submission of issues and feature requests

### Disclaimer
THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
