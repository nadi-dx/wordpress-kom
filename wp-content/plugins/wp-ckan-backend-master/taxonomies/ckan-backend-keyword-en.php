<?php
/**
 * Taxonomy ckan-keyword-en
 *
 * @package CKAN\Backend
 */

/**
 * Class Ckan_Backend_Keyword_En
 */
class Ckan_Backend_Keyword_En extends Ckan_Backend_Keyword {

	/**
	 * Taxonomy name
	 */
	const TAXONOMY = 'ckan-keyword-en';

	/**
	 * Language suffix of taxonomy
	 */
	const LANGUAGE_SUFFIX = 'EN';

	/**
	 * Returns taxonomy name
	 */
	public function get_taxonomy() {
		return self::TAXONOMY;
	}

	/**
	 * Returns language suffix of taxonomy
	 */
	public function get_language_suffix() {
		return self::LANGUAGE_SUFFIX;
	}

}
