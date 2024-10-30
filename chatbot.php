<?php
/*
Plugin Name: ChatBot
Plugin URI: http://www.chatmarshal.com
Description: ChatMarshal chat bot
Author: ChatMarshal
Version: 1.0
*/
function ChatBotScript() {
	wp_register_script('ChatBotCookie', 'https://bot.u4ria.co.za/js/jquery.cookie.js',null, true, true);
	wp_register_script('ChatBotEmbed', 'https://bot.u4ria.co.za/EmbedChat.js', null,true, true);
    	wp_enqueue_script('ChatBotCookie' );
	wp_enqueue_script('ChatBotEmbed' );

}
add_action('wp_enqueue_scripts', 'ChatBotScript');
?>
