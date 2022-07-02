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
 

use Sysgram\Utility\Former\Command;
use Sysgram\Utility\Getini;

require_once __DIR__ . "/vendor/autoload.php";
require_once __DIR__ . "/app/Utility/Former/Command.php";

$stdin = fopen( 'php://stdin', 'r' ); 
stream_set_blocking( $stdin, 0 );

$bash = new Command();

echo Getini::former("start", "open") . PHP_EOL . Getini::former("start", "openSecond") . PHP_EOL . "----------------" . PHP_EOL;

while ( 1 ) {
    $command = fgets( $stdin ); 
      echo "----------------" . PHP_EOL;
      if ( $command ) {
        echo $bash->cmd( $command ) . PHP_EOL . "----------------" . PHP_EOL;
      }
}