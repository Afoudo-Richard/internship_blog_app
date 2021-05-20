<?php
class Post extends Controller
{
	public function index()
	{
		$this->render_view("home/post-detail");
	}
}