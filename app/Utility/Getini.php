<?php

/**
 * This file is part of the Sysgram package.
 *
 * @author                       Javlonbek Tuychiyev
 * @author                       Javlonbek Tuychiyev <https://t.me/DGUuz>
 * @copyright                    President Tuychiyev <j.a.tuychiyev@gmail.com>
 * 
 * @package composer             composer require sysgram/sysgram
 * @package git                  https://github.com/sysgram/sysgram.git
 * @version sysgram              Sysgram v 1.3
 * @version php                  >= v 8.0.0
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


 /**
  * 
 * @link https://core.telegram.org/bots/api                 Documentation for the function.
 * @see https://github.com/sysgram/sysgram/README.md        You can get the full guide to using the index from
 * 
 */

namespace Sysgram\Utility;

use Sysgram\Exceptions\Handler;
use Exception;

class Getini
{

    public static function app ($section, $key = null)
    {

        try{

            $ini = parse_ini_file(__DIR__ . "/../Config/app.ini", true);
            return $ini[$section][$key];

        } catch (Exception $e) {
            
            Handler::log($e);
            return "Error: " . $e;

        }

    }

    public static function tg ($section, $key = null)
    {

        try{

            $ini = parse_ini_file(__DIR__ . "/../Config/telegram.ini", true);
            return $ini[$section][$key];

        } catch (Exception $e) {
            
            Handler::log($e);
            return "Error: " . $e;

        }
        
    }

    public static function bash ($section, $key = null)
    {

        try{

            $ini = parse_ini_file(__DIR__ . "/../Config/bash.ini", true);
            return $ini[$section][$key];

        } catch (Exception $e) {
            
            Handler::log($e);
            return "Error: " . $e;

        }

    }

}