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

namespace Sysgram\Database\Object;

use Sysgram\Exceptions\Handler;
use Sysgram\Utility\Env;
use Exception;
use mysqli;


class DB
{

    protected static $conn;

    public function __construct()
    {
        try {

            $servername = Env::get("DB_HOST");
            $username = Env::get("DB_USERNAME");
            $password = Env::get("DB_PASSWORD");
            $database = Env::get("DB_DATABASE");

            self::$conn = new mysqli($servername, $username, $password, $database);

            if (self::$conn->connect_error):
                Handler::log(self::$conn->connect_error);
                die("Connection failed: " . self::$conn->connect_error);
            endif;
            self::$conn->query("SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci");

        } catch (Exception $e) {

            Handler::log($e);
            return "Error: " . $e;

        }
    }

    public static function sql($sql)
    {
        $mysqli = self::$conn;

        $query = $mysqli->query($sql);

        if ($query == false):
            Handler::log($mysqli->error);
        endif;

        return $query;

        $mysqli->close();
    }

    public static function table($table)
    {
        Handler::log("test");
        die();
        $mysqli = self::$conn;

        $query = $mysqli->query("SELECT * FROM `" . $table . "`");

        if ($query == false):
            Handler::log($mysqli->error);
        endif;

        return $query;

        $mysqli->close();
    }

    public static function select($table, $where)
    {
        $mysqli = self::$conn;

        $column = implode(",", array_keys($where));
        $value = implode(",", array_values($where));

        $query = $mysqli->query("SELECT * FROM `" . $table . "` WHERE `" . $table . "`.`" . $column . "`='" . $value . "'");

        if ($query == false):
            Handler::log($mysqli->error);
        endif;

        return $query;

        $mysqli->close();
    }

    public static function insert($table, $data)
    {
        $mysqli = self::$conn;

        $column = "";
        $value = "";

        foreach ($data as $key => $val):
            $column .= "`" . $key . "`, ";
            $value .= "'" . $val . "', ";
        endforeach;

        $column = trim($column, ", ");
        $value = trim($value, ", ");

        $query = $mysqli->query("INSERT INTO `" . $table . "` (" . $column . ") VALUES (" . $value . ")");

        if ($query == false):
            Handler::log($mysqli->error);
        endif;

        return $query;

        $mysqli->close();
    }

    public static function update($table, $data, $where)
    {
        $mysqli = self::$conn;

        $set = "";
        foreach ($data as $key => $col):
            $set .= "`" . $col . "`='" . $key . "', ";
        endforeach;

        $column = implode(",", array_keys($where));
        $value = implode(",", array_values($where));

        $query = $mysqli->query("UPDATE `" . $table . "` SET " . trim($set, ", ") . " WHERE `" . $table . "`.`" . $column . "` = '" . $value . "'");

        if ($query == false):
            Handler::log($mysqli->error);
        endif;

        return $query;

        $mysqli->close();
    }

    public static function delete($table, $where)
    {
        $mysqli = self::$conn;

        $column = implode(",", array_keys($where));
        $value = implode(",", array_values($where));

        $query = $mysqli->query("DELETE FROM `" . $table . "` WHERE `" . $table . "`.`" . $column . "` = '" . $value . "'");

        if ($query == false):
            Handler::log($mysqli->error);
        endif;

        return $query;

        $mysqli->close();
    }

}
