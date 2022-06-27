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

namespace Sysgram\Utility\Former;

use Sysgram\Utility\Getini;

class Command
{

    public function cmd ( $command = null )
    {
        $cmd = explode(" ", trim($command));

        if ($cmd[0] == 'sys'):
          if (strpos($cmd[1], ':') !== false):
            $make = explode(":", $cmd[1]);

            if ($make[0] == 'make'):
              if ($make[1] == 'controller'):
                if (file_exists(__DIR__ . "/resources/ExampleController.php")):
                  copy(__DIR__ . "/resources/ExampleController.php", __DIR__ . "/../../Controller/" . $cmd[2] . ".php");
                  return Getini::bash("success", "controller");

                else:
                  return Getini::bash("error", "freamwork");

                endif;

              elseif ($make[1] == 'migration'):
                if (file_exists(__DIR__ . "/resources/ExampleMigration.php")):
                  copy(__DIR__ . "/resources/ExampleMigration.php", __DIR__ . "/../../Database/Migration/" . $cmd[2] . ".php");
                  return Getini::bash("success", "migration");

                else:
                  return Getini::bash("error", "freamwork");

                endif;

              else:
                return Getini::bash("error", "notFound");

              endif;

            else:
              return Getini::bash("error", "make");

            endif;

          elseif (strpos($cmd[1], '-') !== false):
            if ($cmd[1] == '-help'):
              return Getini::bash("help", "commands");

            else:
              return Getini::bash("error", "notFound");

            endif;

          else:
            return Getini::bash("error", "notFound");
          endif;

        elseif ($cmd[0] == 'exit'):
          die();

        else:
          return Getini::bash("error", "notFound");
        endif;

       return "";
       
    }

}