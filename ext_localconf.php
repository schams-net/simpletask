<?php
/**
 * Local configuration of EXT:simpletask
 *
 * @author Michael Schams <schams.net>
 * @package simpletask
 */

if(!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

if(TYPO3_MODE === 'BE') {
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks']['SchamsNet\\Simpletask\\Task\\DemoTask'] = array(
		'extension' => $_EXTKEY,
		'title' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang.xlf:task_title',
		'description' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang.xlf:task_description',
		'additionalFields' => ''
	);
}