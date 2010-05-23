<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Open reach communication platform
 *
 * @package    Openreach
 * @author     Practicalwebdev
 */
class Controller_Login extends Controller_Website {

	public function action_index(){
		$view = View::factory('smarty:account/login-form');

		$this->template->title = "Login";
		$this->template->content = $view;
	}

}