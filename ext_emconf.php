<?php
/**
 * Extension configuration of EXT:simpletask
 *
 * @author Michael Schams <schams.net>
 * @package simpletask
 */

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Simple Scheduler Task Demo',
	'description' => 'TYPO3 extension to demonstrate how to implement a task in the TYPO3 Scheduler',
	'category' => 'plugin',
	'author' => 'Michael Schams',
	'author_email' => '',
	'author_company' => 'schams.net',
	'shy' => '',
	'priority' => 'top',
	'module' => '',
	'state' => 'beta',
	'internal' => '',
	'uploadfolder' => '0',
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '0.0.1',
	'constraints' => array(
		'depends' => array(
			'extbase' => '6.0.0-7.99.99',
			'typo3' => '6.2.0-7.99.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
);

?>