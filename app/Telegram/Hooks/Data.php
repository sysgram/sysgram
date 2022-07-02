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

 /**
  * 
  * Additions to variables can also be made here or at Telegram \ Data
  * @var object     $update
  * @var object     $message                update->message
  * @var string     $text                   update->message
  * @var string     $data                   update->callback_query
  * @var integer    $message_id             message->message_id
  * @var integer    $chat_id                message->chat->id
  * @var audio      $audio                  message->audio
  * @var voice      $voice                  message->voice
  * @var video      $video                  message->video
  * @var video      $photo                  message->photo
  * @var document   $document               message->document
  * @var object     $forward_from           message->forward_from
  * @var object     $forward_from_chat      message->forward_from_chat
  * @var object     $callback_query         message->callback_query
  * @var integer    $callback_chat_id       callback_query->message->chat->id
  * @var integer    $callback_message_id    callback_query->message->message_id
  * @var string     $frist_name             message->from->frist_name
  * @var string     $last_name              message->from->last_name
  * @var string     $username               message->from->username
  * @var string     $phone_number           message->contact->phone_number
  *
  */

/**
 * Standardization of incoming data via Telegram bot
 */

/**
 * 
 * Set hook telegram bot
 * 
 */ 
$update = json_decode(file_get_contents('php://input'));
$message = $update->callback_query ? $update->callback_query : $update->message;
$text = mb_convert_encoding($message->text, 'UTF-8', 'auto');
$data = mb_convert_encoding($message->data, 'UTF-8', 'auto');


/**
 * 
 * All message data
 * 
 */
$message_id = $message->message_id;
$chat_id = $message->chat->id;
$audio = $message->audio;
$voice = $message->voice;
$video = $message->video;
$photo = $message->photo;
$document = $message->document;
$forward_from = $message->forward_from;
$forward_from_chat = $message->forward_from_chat;


/**
 * 
 * All callback data
 * 
 */
$callback_query = $update->callback_query;
$callback_chat_id = $callback_query->message->chat->id;
$callback_message_id = $callback_query->message->message_id;


/**
 * 
 * All User data
 * 
 */
$frist_name = $message->from->first_name;
$last_name = $message->from->last_name;
$username = $message->from->username;
$phone_number = $message->contact->phone_number;