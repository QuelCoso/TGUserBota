<?php
if (isset($update['update']['message']['out']) and $update['update']['message']['out'] == true) return 0;
if (!isset($msg)) return 0;
if (isset($update['update']['message']['id'])
    {
      $msgID = $update['update']['message']['id'];
    }



if($msg == '.ping') {
  $MadelineProto->messages->sendMessage(['chat_id' => $chatID, 'message' => "<b>Pong!</b>", 'parse_mode' => 'HTML', 'reply_to_msg_id' => $msgID]);
}
