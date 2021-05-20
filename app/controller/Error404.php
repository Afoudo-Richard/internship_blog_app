<?php
class Error404 extends Controller
{
	public function index()
	{
		$this->render_view("home/404");
	}
}