<?php

namespace MetaStore\App\Furs\Messages;

use MetaStore\App\{Kernel\Parser, Furs\Discord\API};

/**
 * Class Messages
 * @package MetaStore\App\Furs\Messages
 */
class Messages {
	public static function getMassages() {
		$getData   = API::getAPI( 'messages', 1 * 60 );
		$queryData = $getData;

		$outMessage = '';

		foreach ( $queryData as $message ) {
			$getID         = ( $message['id'] );
			$getTimestamp  = Parser::clearData( $message['timestamp'] );
			$getContent    = Parser::clearData( $message['content'] );
			$getAuthorName = Parser::clearData( $message['author']['username'] );
			$getAuthorID   = Parser::clearData( $message['author']['id'] );
			$getAuthorIMG  = Parser::clearData( $message['author']['avatar'] );
			$getEveryone   = $message['mention_everyone'];

			$getAttachments = $message['attachments'];
			$getMentions    = $message['mentions'];

			if ( $getAuthorIMG == null ) {
				$outAuthorIMG = '<span class="fa fa-paw fa-fw fa-2x" aria-hidden="true"></span>';
			} else {
				$outAuthorIMG = '<img src="https://cdn.discordapp.com/avatars/' . $getAuthorID . '/' . $getAuthorIMG . '.jpg" alt="' . $getAuthorName . '" />';
			}

			if ( $getEveryone == false ) {
				$outEveryone = '';
			} else {
				$outEveryone = 'userEveryone';
			}

			/**
			 * Mentions parser.
			 * ---------------------------------------------------------------------------------------------------------- */

			foreach ( $getMentions as $mention ) {
				$getMUserID   = Parser::clearData( $mention['id'] );
				$getMUserName = Parser::clearData( $mention['username'] );
				$setMUserID   = Parser::clearData( '#\<\@(.*)' . $getMUserID . '\>#i' );
				$setMUserName = '<span class="userMention">' . Parser::clearData( '@' . $getMUserName ) . '</span>';

				$getContent = preg_replace( $setMUserID, $setMUserName, $getContent );

			}

			/**
			 * Attachments parser.
			 * ---------------------------------------------------------------------------------------------------------- */

			$outAttachmentURL = '';

			foreach ( $getAttachments as $attachment ) {
				$getAttachmentURL  = $attachment['url'];
				$getAttachmentName = Parser::clearData( $attachment['filename'] );

				if ( ! array_key_exists( 'width', $attachment ) ) {
					$outAttachmentURL .= '<a href="' . $getAttachmentURL . '">' . $getAttachmentName . '</a>';
				} else {
					$outAttachmentURL .= '<a data-fancybox="gallery" href="' . $getAttachmentURL . '"><img src="' . $getAttachmentURL . '" alt="' . $getAttachmentName . '" /></a>';
				}
			}

			/**
			 * URL parser.
			 * ---------------------------------------------------------------------------------------------------------- */

			$getURL     = '#(https?://([\d\w\.-]+\.[\w\.]{2,6})[^\s\]\[\<\>]*/?)#i';
			$setURL     = '<a href="${1}" rel="nofollow" target="_blank">${2}</a>';
			$getContent = preg_replace( $getURL, $setURL, $getContent );

			/**
			 * Emojis parser.
			 * ---------------------------------------------------------------------------------------------------------- */

			$getEmoji   = '#\<:(.+):(\d+)\>#i';
			$setEmoji   = '<img class="userEmoji" src="https://cdn.discordapp.com/emojis/${2}.png" alt="${1}" />';
			$getContent = preg_replace( Parser::clearData( $getEmoji ), $setEmoji, $getContent );

			/**
			 * Out content.
			 * ---------------------------------------------------------------------------------------------------------- */

			$outContent = $getContent;

			if ( $getAuthorName != 'BOT.Hello' ) {
				$outMessage .= '<li class="' . $outEveryone . '"><div title="' . $getAuthorName . '" class="userImg">' . $outAuthorIMG . '</div><div class="userContent">' . $outContent . '<div class="userAttachment">' . $outAttachmentURL . '</div></div></li>';
			}
		}

		$outMessageList = $outMessage;

		return $outMessageList;
	}
}