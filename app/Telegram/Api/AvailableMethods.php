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

use CURLFile;
use Sysgram\Telegram\Hooks\Hook;
use Sysgram\Utility\Getini;



trait AvailableMethods
{

    public static function sendMessage($chat_id, $text, $parse_mode = null, bool $disable_web_page_preview = null, $reply_to_message_id = null, $reply_markup = null)
    {
        empty($parse_mode)?$parse_mode=Getini::tg("message", "parse_mode"):$parse_mode;
        empty($disable_web_page_preview)?$disable_web_page_preview=Getini::tg("message", "disable_web_page_preview"):$disable_web_page_preview;

        return Hook::bot('sendmessage', [ 'chat_id' => $chat_id, 'text' => $text, 'parse_mode' => $parse_mode, 'disable_web_page_preview' => $disable_web_page_preview, 'reply_to_message_id' => $reply_to_message_id, 'reply_markup' => $reply_markup ]);
    }

    public static function forwardMessage($chat_id, $from_chat_id, $message_id)
    {
        return Hook::bot('forwardMessage', [ 'chat_id' => $chat_id, 'from_chat_id' => $from_chat_id, 'message_id' => $message_id ]);
    }

    public static function copyMessage($chat_id, $from_chat_id, $message_id)
    {
        return Hook::bot('copyMessage', [ 'chat_id' => $chat_id, 'from_chat_id' => $from_chat_id, 'message_id' => $message_id ]);
    }

    public static function sendPhoto($chat_id, $photo, $caption = null, $parse_mode = null, $reply_markup = null, $reply_to_message_id = null)
    {
        empty($parse_mode)?$parse_mode=Getini::tg("message", "parse_mode"):$parse_mode;

        return Hook::bot('sendPhoto', [ 'chat_id' => $chat_id, 'photo' => $photo, 'caption' => $caption, 'parse_mode' => $parse_mode, 'reply_to_message_id' => $reply_to_message_id, 'reply_markup' => $reply_markup ]);
    }

    public static function sendAudio($chat_id, $audio, $caption = null, $parse_mode = null, $duration = null, $title = null, $performer = null, $reply_markup = null, $reply_to_message_id = null)
    {
        empty($parse_mode)?$parse_mode=Getini::tg("message", "parse_mode"):$parse_mode;

        return Hook::bot('sendAudio', [ 'chat_id' => $chat_id, 'audio' => $audio, 'caption' => $caption, 'parse_mode' => $parse_mode, 'duration' => $duration, 'title' => $title, 'performer' => $performer, 'reply_to_message_id' => $reply_to_message_id, 'reply_markup' => $reply_markup ]);
    }

    public static function sendDocument($chat_id, $document, $caption = null, $parse_mode = null, $reply_markup = null, $reply_to_message_id = null)
    {
        empty($parse_mode)?$parse_mode=Getini::tg("message", "parse_mode"):$parse_mode;
        
        return Hook::bot('sendDocument', [ 'chat_id' => $chat_id, 'document' => $document, 'caption' => $caption, 'parse_mode' => $parse_mode, 'reply_to_message_id' => $reply_to_message_id, 'reply_markup' => $reply_markup ]);
    }

    public static function sendDocumentServer($chat_id, $document, $caption = null, $parse_mode = null, $reply_markup = null, $reply_to_message_id = null)
    {
        empty($parse_mode)?$parse_mode=Getini::tg("message", "parse_mode"):$parse_mode;

        return Hook::bot('sendDocument', [ 'chat_id' => $chat_id, 'document' => new CURLFile($document), 'caption' => $caption, 'parse_mode' => $parse_mode, 'reply_to_message_id' => $reply_to_message_id, 'reply_markup' => $reply_markup ]);
    }

    public static function sendVideo($chat_id, $video, $caption = null, $duration = null, $parse_mode = null, $reply_markup = null, $reply_to_message_id = null)
    {
        empty($parse_mode)?$parse_mode=Getini::tg("message", "parse_mode"):$parse_mode;

        return Hook::bot('sendVideo', [ 'chat_id' => $chat_id, 'video' => $video, 'caption' => $caption, 'duration' => $duration, 'parse_mode' => $parse_mode, 'reply_to_message_id' => $reply_to_message_id, 'reply_markup' => $reply_markup ]);
    }

    public static function sendAnimation($chat_id, $animation, $caption = null, $parse_mode = null, $reply_markup = null, $reply_to_message_id = null)
    {
        empty($parse_mode)?$parse_mode=Getini::tg("message", "parse_mode"):$parse_mode;

        return Hook::bot('sendAnimation', [ 'chat_id' => $chat_id, 'animation' => $animation, 'caption' => $caption, 'parse_mode' => $parse_mode, 'reply_to_message_id' => $reply_to_message_id, 'reply_markup' => $reply_markup ]);
    }

    public static function sendVoice($chat_id, $voice, $caption, $duration = null, $parse_mode = null, $reply_markup = null, $reply_to_message_id = null)
    {
        empty($parse_mode)?$parse_mode=Getini::tg("message", "parse_mode"):$parse_mode;
        
        return Hook::bot('sendVoice', [ 'chat_id' => $chat_id, 'voice' => $voice, 'caption' => $caption, 'duration' => $duration, 'parse_mode' => $parse_mode, 'reply_to_message_id' => $reply_to_message_id, 'reply_markup' => $reply_markup ]);
    }

    public static function sendVideoNote($chat_id, $video_note, $caption = null, $duration = null, $length = null, $parse_mode = null, $reply_markup = null, $reply_to_message_id = null)
    {
        empty($parse_mode)?$parse_mode=Getini::tg("message", "parse_mode"):$parse_mode;

        return Hook::bot('sendVideoNote', [ 'chat_id' => $chat_id, 'video_note' => $video_note, 'caption' => $caption, 'duration' => $duration, 'length' => $length, 'parse_mode' => $parse_mode, 'reply_to_message_id' => $reply_to_message_id, 'reply_markup' => $reply_markup ]);
    }

    public static function sendMediaGroup($chat_id, $media, $reply_to_message_id = null)
    {
        return Hook::bot('sendMediaGroup', [ 'chat_id' => $chat_id, 'media' => $media, 'reply_to_message_id' => $reply_to_message_id ]);
    }

    public static function sendLocation($chat_id, $latitude, $longitude, $horizontal_accuracy, $live_period = null, $heading = null, $proximity_alert_radius = null, $reply_markup = null, $reply_to_message_id = null)
    {
        return Hook::bot('sendLocation', [ 'chat_id' => $chat_id, 'latitude' => $latitude, 'longitude' => $longitude, 'horizontal_accuracy' => $horizontal_accuracy, 'live_period' => $live_period, 'heading' => $heading, 'proximity_alert_radius' => $proximity_alert_radius, 'reply_to_message_id' => $reply_to_message_id, 'reply_markup' => $reply_markup ]);
    }

    public static function sendVenue($chat_id, $latitude, $longitude, $title, $address, $foursquare_id = null, $foursquare_type = null, $google_place_id = null, $google_place_type = null, $reply_markup = null, $reply_to_message_id = null)
    {
        return Hook::bot('sendVenue', [ 'chat_id' => $chat_id, 'latitude' => $latitude, 'longitude' => $longitude, 'title' => $title, 'address' => $address, 'foursquare_id' => $foursquare_id, 'foursquare_type' => $foursquare_type, 'google_place_id' => $google_place_id, 'google_place_type' => $google_place_type, 'reply_to_message_id' => $reply_to_message_id, 'reply_markup' => $reply_markup ]);
    }

    public static function sendContact($chat_id, $phone_number, $first_name, $last_name = null, $vcard = null, $reply_markup = null, $reply_to_message_id = null)
    {
        return Hook::bot('sendContact', [ 'chat_id' => $chat_id, 'phone_number' => $phone_number, 'first_name' => $first_name, 'last_name' => $last_name, 'vcard' => $vcard, 'reply_to_message_id' => $reply_to_message_id, 'reply_markup' => $reply_markup ]);
    }

    public static function sendPoll($chat_id, $question, array $options, $is_anonymous = null, $type = null, $allows_multiple_answers = false, $correct_option_id = null, $explanation = null, $explanation_parse_mode = null, $explanation_entities = null, $open_period = null, $close_date = null, $is_closed = null, $reply_markup = null, $reply_to_message_id = null)
    {
        return Hook::bot('sendPoll', [ 'chat_id' => $chat_id, 'question' => $question, 'options' => $options, 'is_anonymous' => $is_anonymous, 'type' => $type, 'allows_multiple_answers' => $allows_multiple_answers, 'correct_option_id' => $correct_option_id, 'explanation' => $explanation, 'explanation_parse_mode' => $explanation_parse_mode, 'explanation_entities' => $explanation_entities, 'open_period' => $open_period, 'close_date' => $close_date, 'is_closed' => $is_closed, 'reply_to_message_id' => $reply_to_message_id, 'reply_markup' => $reply_markup ]);
    }

    public static function sendChatAction($chat_id, $action)
    {
        return Hook::bot('sendChatAction', [ 'chat_id' => $chat_id, 'action' => $action ]);
    }

    public static function getFile($file_id)
    {
        return Hook::bot('getFile', [ 'file_id' => $file_id ]);
    }

    public static function answerCallbackQuery($callback_query_id, $text = null, $show_alert = null, $url = null, $cache_time = null)
    {
        return Hook::bot('answerCallbackQuery', [ 'callback_query_id' => $callback_query_id, 'text' => $text, 'show_alert' => $show_alert, 'url' => $url, 'cache_time' => $cache_time ]);
    }
}
