<?php defined('SYSPATH') OR die('No direct access allowed.');
class controller_Login  extends controller_drinkrecept {
    public function __construct(){
        $this->contenttype='text/html';
        parent::__construct();
    }
	public function index()
	{
        header("location: /");
        die();
	}
    public function login(){
        var_dump($_REQUEST);
    }
	public function __call($method, $arguments)
	{
		// Disable auto-rendering
		$this->auto_render = FALSE;

		// By defining a __call method, all pages routed to this controller
		// that result in 404 errors will be handled by this method, instead of
		// being displayed as "Page Not Found" errors.
		echo __('This text is generated by __call. If you expected the index page, you need to use: :uri:',
				array(':uri:' => Router::$current_uri));
	}

} // End Welcome Controller
