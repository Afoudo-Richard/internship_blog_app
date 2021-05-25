<?php
class App
{
	// below is the default controller, method and parameters that is "home", "index" and "[]" respectively
	protected $controller="home";
	protected $method="index";
	protected $params= [];
	protected $error = 'Error404';

	public function __construct()
	{
		$url = $this->parseUrl();
		
		if($url == null)
		{
			
		}
		else if(file_exists("app/controller/".$url[0].".php"))
		{
			$this->controller = $url[0];
			unset($url[0]);
		}
		else
		{
			$this->controller = $this->error;
		}

		require_once("app/controller/".$this->controller.".php");

		//initialize the controller
		$this->controller = new $this->controller;
		

		// Get the method from the url
		if(isset($url[1]))
		{
			if(method_exists($this->controller, $url[1]))
			{
				$this->method = $url[1];
				unset($url[1]);
			}
			else
			{
				$this->controller = $this->error;
				require_once("app/controller/".$this->controller.".php");
				$this->controller = new $this->error;
			}
		}

		$this->params = $url ? array_values($url) : [] ;
		//call class method and pass it the parameters
		
		call_user_func_array([$this->controller,$this->method], $this->params);

	}

	public function parseUrl()
	{
		if(isset($_GET['url']))
		{
			return $url=explode("/",filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
		}
	}
}