<?php defined('SYSPATH') or die('No direct script access.');

// Static file serving (CSS, JS, images)
Route::set('files', 'file(/<file>)', array('file' => '.+'))
	->defaults(array(
		'controller' => 'static',
		'action'     => 'file',
		'file'       => NULL,
	));