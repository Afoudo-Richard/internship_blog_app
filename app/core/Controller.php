<?php

class Controller
{
	public function model($model)
	{
		// check if file exist
		if(file_exists("app/model/".$model.".php"))
		{
			require_once("app/model/".$model.".php");
			$actual=explode("/", $model);
			$main=end($actual);
			return new $main;
		}
		else
		{
			die("Model ".$model." not found");
		}
	}

	public function render_view($view, $data=[])
	{
		//check if file exist
		if(file_exists("app/view/".$view.".php"))
		{
			if(!empty($data))
			{
				extract($data);
			}
			require_once("app/view/".$view.".php");
		}
		else
		{
			die("Error view '".$view."' does not exist");
		}
	}
}