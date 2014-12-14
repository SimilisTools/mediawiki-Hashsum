<?php
 
# Avoids illegal processing, doesn't cost much, but unnecessary on a correct installation
if (!defined('MEDIAWIKI')) { die(-1); } 
 
class Hashsum {
	
	
	public static function MD5sumProcess ( $parser, $frame, $args ) {
		
		$param = isset( $args[0] ) ? trim( $frame->expand( $args[0] ) ) : '';
		
		$output = "";
		
		if ( ! empty( $param ) ) {
			$MD5temp = exec( 'echo -n '.$param.'|md5sum' );
			$MD5split = preg_split( "/\s/", $MD5temp );
			$output = $MD5split[0];
		}
		
		return $parser->insertStripItem( $output, $parser->mStripState );
	}
	
	public static function SHA1sumProcess ( $parser, $frame, $args ) {
		
		$param = isset( $args[0] ) ? trim( $frame->expand( $args[0] ) ) : '';
		
		$output = "";
		
		if ( ! empty( $param ) ) {
			$MD5temp = exec( 'echo -n '.$param.'|sha1sum' );
			$MD5split = preg_split( "/\s/", $MD5temp );
			$output = $MD5split[0];
		}
		
		return $parser->insertStripItem( $output, $parser->mStripState );
	}
}