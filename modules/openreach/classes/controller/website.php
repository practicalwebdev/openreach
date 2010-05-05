<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Open reach communication platform
 *
 * @package    Openreach
 * @author     Practicalwebdev
 */
class Controller_Website extends Controller_Template {

	protected $files;

	public $template = 'openreach/template';

	public function before()
	{
		$this->files = Route::get('files');
		parent::before();
	}

	public function action_index(){
		$this->template->title = "Hello world";
	}

	public function after(){
		// Add styles
		$this->template->styles = array(
		$files->uri(array('file' => 'css/screen.css')) => 'screen',
		$files->uri(array('file' => 'css/kodoc.css'))  => 'screen',
		);

		// Add scripts
		$this->template->scripts = array(
		$files->uri(array('file' => 'js/jquery.js')),
		$files->uri(array('file' => 'js/openreach.js')),
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