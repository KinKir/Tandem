<?php 
require_once 'constants.php';
session_start();

class Language {


	static function &_instance() {
	    static $instance = null;
	    if (is_null($instance)) {
	      $instance = new Language();
	    }

	    return $instance;
	}

	static function init() {

		$locale = isset($_SESSION[LANG])?$_SESSION[LANG]:false;
		if (!$locale) {
			$locale = 'en_US';
			$_SESSION[LANG] = $locale;
		}
		if (!file_exists(dirname(__FILE__).'/../languages/'.$locale.'/LC_MESSAGES/messages.po')) {
			$locale = 'en_US';
			$_SESSION[LANG] = $locale;	
		}

		bind_textdomain_codeset("messages", "UTF-8");
		putenv('LANG=' . $locale);

		setlocale(LC_ALL, $locale);

		bindtextdomain( "messages", "languages" );
		textdomain("messages");

		$instance = &Language::_instance();

    	return $instance;
	}
	/**
	 * 
	 * Get the translation
	 * @param string $string
	 */
	public function get($string) {
		return gettext($string);
	}
	
	/**
	*
	* Get the translation and do sprintf
	* @param string $string
	* @param string $subs
	*/
	public function getTag($string, $subs) {
		return sprintf(gettext($string), $subs);
	}
	
	/**
	*
	* Get the translation and do sprintf
	* @param string $string
	* @param string $subs1
	* @param string $subs2
	*/
	public function getTagDouble($string, $subs1, $subs2) {
		return sprintf(gettext($string), $subs1, $subs2);
	}
}

$LanguageInstance = Language::init();