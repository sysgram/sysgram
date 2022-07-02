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

namespace Sysgram\Telegram\Api;

use Sysgram\Telegram\Hooks\Hook;

trait InlineMode
{

    public static function InlineQuery($id, $from, $query, $offset, $chat_type, $location = null,)
    {
        return Hook::bot('InlineQuery', [ 'id' => $id, 'from' => $from, 'query' => $query, 'offset' => $offset, 'chat_type' => $chat_type, 'location' => $location ]);
    }

    public static function answerInlineQuery($inline_query_id, $results, $cache_time = null, $is_personal = null, $next_offset = null, $switch_pm_text = null, $switch_pm_parameter = null)
    {
        return Hook::bot('answerInlineQuery', [ 'inline_query_id' => $inline_query_id, 'results' => $results, 'cache_time' => $cache_time, 'is_personal' =>$is_personal, 'next_offset' => $next_offset, 'switch_pm_text' => $switch_pm_text, 'switch_pm_parameter' => $switch_pm_parameter ]);
    }

}