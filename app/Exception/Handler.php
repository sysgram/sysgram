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

namespace Sysgram\Exception;

/**
 * Class Handler
 * 
 * @method static Response log(string $messasge, string $status)  Used to write data to a log file
 * @method static Response clear()                                log is used to clear the file
 */

class Handler
{
    protected static $logPath = __DIR__ . "/../../storage/logs/sysgram.log";

    public static function log($message, $status = 'ERROR')
    {
        $message = date("[ d-m-Y H:i:s ] ") . "|*" . $status . "*| " . $message . "\n";
        $logPath = self::$logPath;
        error_log($message, 3, $logPath);

        return true;
    }

    public static function clear()
    {
        file_put_contents(self::$logPath, '');
        return false;
    }
}
