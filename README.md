# SysGram - System Telegram Bot Package
[![Typing SVG](https://readme-typing-svg.herokuapp.com?font=Cantora+One&color=ADBAC7&center=true&vCenter=true&lines=High+security+system;Easy%2C+convenient+and+understandable)](https://t.me/DGUuz/129)

<!-- badges -->
[![Build Status](https://img.shields.io/static/v1?label=helper&message=Telegram&color=informational)](https://t.me/Azimjanovich)
[![Minimum PHP Version](https://img.shields.io/static/v1?label=packagist&message=v1.1&color=blueviolet)](https://packagist.org/packages/sysgram/sysgram)
[![Minimum PHP Version](https://img.shields.io/static/v1?label=downloads&message=...&color=success)](https://packagist.org/packages/sysgram/sysgram)
[![Minimum PHP Version](https://img.shields.io/static/v1?label=PHP&message=>=8.0&color=blue)](https://php.net/)
[![License](https://img.shields.io/packagist/l/php-telegram-bot/laravel.svg)](https://github.com/sysgram/sysgram/LICENSE.md)

<!-- info  -->
This package makes it easy to work with the Telegram Bot api.

<!-- doc -->
## Table of Contents
- [Installation](#installation)
- [Usage](#usage)
- [Supported](#supported)
- [TODO](#todo)
- [Troubleshooting](#troubleshooting)
- [Contributing](#contributing)
- [License](#license)
- [Credits](#credits)


<!-- install -->
## **Installation**
## Your First Sysgram Project

Before creating your first Sysgram project, you should ensure that your local machine has PHP and [Composer](https://getcomposer.org/) installed. If you are developing on macOS, PHP and Composer can be installed via [Homebrew](https://brew.sh/). In addition, we recommend [installing Node and NPM](https://nodejs.org/).
Before creating your first Laravel project, you should ensure that your local machine has PHP and [Composer](https://getcomposer.org/) installed. If you are developing on macOS, PHP and Composer can be installed via [Homebrew](https://brew.sh/). In addition, we recommend [installing Node and NPM](https://nodejs.org/).


After you have installed PHP and Composer, you may create a new Sysgram project via the Composer `create-project` command:

    composer create-project sysgram/sysgram example-bot

Or you'll need to modify the composer.json file in your project as follows:
```json
{
    "name": "yourproject/yourproject",
    "type": "project",
    "require": {
        "sysgram/sysgram": "^1.1"
    }
}
```
And run composer update

Or run the following command at the command line:

    composer require sysgram/sysgram

## Environment Based Configuration
In the config you have to specify Telegram API KEY


Since many of Sysgram's configuration option values may vary depending on whether your application is running on your local machine or on a production web server, many important configuration values are defined using the `.env` file that exists at the root of your application.

Your `.env` file should not be committed to your application's source control, since each developer / server using your application could require a different environment configuration. Furthermore, this would be a security risk in the event an intruder gains access to your source control repository, since any sensitive credentials would get exposed.


Before running the project, go to the ``.env`` file and place your telegram bot **TOKEN**

```env
TOKEN=put_telegram_bot_token
```


If you are using a **database**, you must also set the following settings:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=put_db_name
DB_USERNAME=put_db_username
DB_PASSWORD=put_db_password
```

You can also change the **time zone** and other settings through the `.env` file


## **Usage**

You can control bot functionality through the `app\Controller\Controller.php` file


Or you can enter the following command by running `cmd.sh` and create a new controller file

    php cmd.sh

Command to create a controller

    sys make: controller nameController

Run the following command to check other commands

    sys -help


To change the permanent configuration of Telegram messages, go to the `app\Config\telegram.ini` file

## **Supported**


## The following frameworks support Sysgram 💪🏻

[<img src="https://laravel.com/img/logomark.min.svg" alt="Learn Laravel 9x today icon" width="60" height="60" style="margin: 10px">](https://laravel.com/)
[<img src="https://cdn.icon-icons.com/icons2/2415/PNG/512/yii_original_wordmark_logo_icon_146286.png" alt="Learn Symfony 6 today icon" width="60" height="60" style="margin: 10px">](https://www.yiiframework.com/)
[<img src="https://cdn.icon-icons.com/icons2/2415/PNG/512/symfony_original_wordmark_logo_icon_146328.png" alt="Learn Symfony 6 today icon" width="60" height="60" style="margin: 10px">](https://symfony.com/)[<img src="https://cdn.icon-icons.com/icons2/2699/PNG/512/joomla_logo_icon_170506.png" alt="Learn Symfony 6 today icon" width="60" height="60" style="margin: 10px">](https://framework.joomla.org/)
[<img src="https://cdn.icon-icons.com/icons2/2415/PNG/512/codeigniter_plain_wordmark_logo_icon_146592.png" alt="Learn Symfony 6 today icon" width="60" height="60" style="margin: 10px">](https://codeigniter.com/)
[<img src="https://cdn.icon-icons.com/icons2/2415/PNG/512/drupal_original_wordmark_logo_icon_146543.png" alt="Learn Symfony 6 today icon" width="60" height="60" style="margin: 10px">](https://www.drupal.org/)
[<img src="https://cdn.icon-icons.com/icons2/2415/PNG/512/zend_plain_wordmark_logo_icon_146281.png" alt="Learn Symfony 6 today icon" width="60" height="60" style="margin: 10px">](https://framework.zend.com/)
[<img src="https://cdn.icon-icons.com/icons2/2415/PNG/512/doctrine_line_wordmark_logo_icon_146553.png" alt="Learn Symfony 6 today icon" width="60" height="60" style="margin: 10px">](https://www.doctrine-project.org/)


## **TODO**

write more tests

## **Troubleshooting**

If you like living on the edge, please report any bugs you find on the
[sysgram/sysgram issues](https://github.com/sysgram/sysgram/issues) page.

## **Contributing**

Pull requests are welcome.
See [CONTRIBUTING.md](CONTRIBUTING.md) for information.

## **License**

Please see the [LICENSE](LICENSE.md) included in this repository for a full copy of the MIT license,
which this project is licensed under.

## **Credits**

- [Djavlonbek Tuychiyev](https://github.com/president-tuychiyev)

Full credit list in [CREDITS](CREDITS)
