<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Open reach communication platform
 *
 * @package    Openreach
 * @author     Practicalwebdev
 */
class Controller_Website extends Controller_Smarty {

	protected $files;

	public $template = 'smarty:openreach/template';

	public function before()
	{
		$this->files = Route::get('files');
		parent::before();
	}

	public function action_index(){
		$this->template->title = "Hello world";
		$this->template->content = "Tartalom";
	}

	public function after(){
		// Add styles
		$this->template->styles = array(
		$this->files->uri(array('file' => 'css/reset.css')) => 'screen',
		$this->files->uri(array('file' => 'css/text.css')) => 'screen',
		$this->files->uri(array('file' => 'css/grid.css')) => 'screen',
		$this->files->uri(array('file' => 'css/layout.css')) => 'screen',
		$this->files->uri(array('file' => 'css/nav.css')) => 'screen',
		);

		// Add scripts
		$this->template->scripts = array(
		$this->files->uri(array('file' => 'js/jquery-1.3.2.js')),
		$this->files->uri(array('file' => 'js/jquery-fluid16.js')),
		$this->files->uri(array('file' => 'js/jquery-ui.js')),
		// $files->uri(array('file' => 'js/openreach.js')),
		);
		parent::after();
	}

	public function action_file()
	{
		// Get the file path from the request
		$file = $this->request->param('file');

		// Find the file extension
		$ext = pathinfo($file, PATHINFO_EXTENSION);

		// Remove the extension from the filename
		$file = substr($file, 0, -(strlen($ext) + 1));

		if ($file = Kohana::find_file('media', $file, $ext))
		{
			// Send the file content as the response
			$this->request->response = file_get_contents($file);
		}
		else
		{
			// Return a 404 status
			$this->request->status = 404;
		}

		// Set the content type for this extension
		$this->request->headers['Content-Type'] = File::mime_by_ext($ext);
	}
}