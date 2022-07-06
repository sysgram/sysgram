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

use Exception;
use Sysgram\Exception\Handler;

class Env
{

    public static function get($key = null)
    {

        try{

            $env = file(__DIR__ . "/../../.env", FILE_IGNORE_NEW_LINES);
            $getenv = [];

            foreach($env as $e):
                $explode = explode("=", $e);
                $getenv += [ $explode[0] => $explode[1] ];
            endforeach;

            return $getenv[$key];

        } catch (Exception $e) {
            
            Handler::log($e);
            return "Error: " . $e;

        }
        
    }

}
