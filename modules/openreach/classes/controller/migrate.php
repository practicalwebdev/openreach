<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Open reach communication platform
 *
 * @package    Openreach
 * @author     Practicalwebdev
 */
class Controller_Migrate extends Controller_Website {
	// TODO: admin role required
	public function action_index() {
		$view = View::factory('smarty:backend/migration');
		$view->message = "Done...";
		
		$this->template->title = "Migration";
		$this->template->content = $view;
	}

	public function action_start() {
		$view = View::factory('smarty:backend/migration');
		$view->message = "Done";

		$this->template->title = "Migration done...";
		$this->template->content = $view;
	}

}